<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function create( Request $request){
       return view('admin.createUser');
   }
   public function store(Request $request)
   {
         User::create($request->only('name','apellido','cedula','email','usuario','telefono','celular','direccion','rol_id')
      +[
         'password'=>bcrypt($request->input('password')),
      ]
      );
         return redirect()->back();
   }

   public function search(Request $request)
   {
      $users= user::all();
      return view('admin.Usersearch',['users'=>$users]);
   }
   public function searchuser(Request $request)
   {
      $texto=trim($request->get('texto'));
      $users=DB::table('users')
      ->select('id','name','apellido','cedula','email','usuario','telefono','celular','direccion','rol_id',)
      ->where('name','like','%'.$texto.'%')
      ->orwhere('cedula','like','%'.$texto.'%')
      ->orderBy('name','asc')
      ->paginate(10);
      return view('admin.Usersearch',compact('users','texto'));
   }

   public function destroy($id){
      
       DB::table('users')->delete($id);
       return back()->with('succes','se ha eiminadodo el user');
      
   }

   public function update(Request $request,User $user){
   
      $request->merge([
         'password'=>Hash::make($request->input('password'))
      ]);

      $user->update($request->all());
      return redirect()->route('searchUser');
   }
}

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
      $users=DB::table('users')->select('id','name','email','apellido','cedula','usuario','telefono','celular','direccion','rol_id')
      ->where('name','LIKE',"%".$texto."%")
      ->orwhere('cedula','LIKE',"%".$texto."%")
      ->orderBy('name','asc')
      ->paginate(10);
      foreach($users as $user){
        print_r($user->id);
      //   print_r($user->email);
        print_r($user->usuario);
      }
      return view('admin.Usersearch',['users'=>$users]);
      
   }

   public function destroy($id){
      
       DB::table('users')->delete($id);
       return back()->with('succes','se ha eiminadodo el user');
      
   }

   public function edit(){
         
      return view('admin.Prueba');
      
   }
   public function updateUser(Request $request,User $user){
         
      return view('admin.EditarUsuario',['users'=>$user]);
         
      
   }

   public function update(Request $request,User $user){
   
      $request->merge([
         'password'=>Hash::make($request->input('password'))
      ]);

      $user->update($request->all());
      return redirect()->route('searchUser');
   }
}

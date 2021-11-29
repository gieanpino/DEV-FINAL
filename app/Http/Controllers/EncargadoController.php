<?php

namespace App\Http\Controllers;


use App\Models\Encargado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EncargadoController extends Controller
{
   public function index()
   {
      {
         // $encargados= encargado::all();
         // return view('sgsst.Encargado.index')->with('encargados', $encargados);
         return view('sgsst.Encargado.index');
    }
   }
   public function create( Request $request)
   {
       return view('sgsst.Encargado.crear');
   }
   public function store(Request $request)
   {
         Encargado::create($request->only('name','cedula','email','usuario','telefono','rol_id')
      +[
         'password'=>bcrypt($request->input('password')),
      ]
      );
         return redirect()->back();
   }

   public function search(Request $request)
   {
      $users= Encargado::all();
      return view('admin.Usersearch',['Encargado'=>$users]);
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

   public function update(Request $request,Encargado $user){
   
      $request->merge([
         'password'=>Hash::make($request->input('password'))
      ]);

      $user->update($request->all());
      return redirect()->route('searchUser');
   }
}

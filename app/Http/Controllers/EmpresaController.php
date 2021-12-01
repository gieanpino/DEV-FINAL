<?php

namespace App\Http\Controllers;


use App\Models\Empresas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $empresas= Empresas::all();
         return view('sgsst.Empresas.index')->with('empresas',$empresas);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sgsst.Empresas.crear');
    }
    public function adjuntos()
    {
        return view('sgsst.Empresas.Adjuntos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Empresas::create($request->all());
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
    }
    public function cargaraEncargados()
    {
        $empresas= Empresas::all();
        return view('sgsst.Encargado.crear')->with('empresas',$empresas);   
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateEmpresa(Request $request,Empresas $empresa)
    {
        
         return view('sgsst.Empresas.edit',['empresa'=>$empresa]);
       
    }
    public function update(Request $request,Empresas $empresa){
   
        $request->merge([
           'password'=>Hash::make($request->input('password'))
        ]);
  
        $empresa->update($request->all());
        return view('sgsst.Empresas.edit',['empresa'=>$empresa]);
     }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('empresas')->delete($id);
        return back()->with('succes','se ha eiminadodo el user');
    }
}

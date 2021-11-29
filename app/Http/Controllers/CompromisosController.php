<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compromiso;

class CompromisosController extends Controller
{
    public function index(){

        $compromiso = Compromiso::get();

        //dd($compromiso);

        return view('compromiso.index', [
            'compromiso' => $compromiso,
        ]);
        }

        public function create(){
        return view('compromiso.new_compromiso');
        }

        public function show($id){

        }

        public function edit($id){

            /*$empresa = compromiso::findOrFail($id);
            $empresa = compromiso::where('id', $id)->first();

            return view('compromiso.edit_empresa', [
                'empresa' => $empresa,
            ]);*/
        }

        public function store(Request $request){
            /*
            $request->validate(
                [
                    'nombre_empresa'=>'required|max:500',
                    'telefono_empresa'=>'required|numeric|unique:compromiso,telefono',
                    'direccion_empresa'=>'required|max:500',
                    'nit_empresa'=>'required|max:500',

                ]
                ,
                [
                    'nombre_empresa.required' => 'El nombre de la empresa es requerido',
                    'telefono_empresa.required' => 'El télefono de la empresa es requerido',
                    'telefono_empresa.numeric' => 'El télefono debe ser un dato númerico',
                    'telefono_empresa.unique' => 'El télefono ya se encuentra registrado',
                    'direccion_empresa.required' => 'La dirección de la empresa es requerida',
                    'nit_empresa.required' => 'El NIT de la empresa es requerido',


                ]
                );


            $empresa = new compromiso;
            $empresa->nombre_empresa = $request->nombre_empresa;
            $empresa->direccion = $request->direccion_empresa;
            $empresa->nit = $request->nit_empresa;
            $empresa->telefono = $request->telefono_empresa;

            $empresa->save();

            return back()->with('message','La empresa fue agregada correctamente');
            */



        }

        public function update(Request $request, $id){

            /*
            $request->validate(
                [
                    'nombre_empresa'=>'required|max:500',
                    'telefono_empresa'=>'required|numeric',
                    'direccion_empresa'=>'required|max:500',
                    'nit_empresa'=>'required|max:500',

                ]
                ,
                [
                    'nombre_empresa.required' => 'El nombre de la empresa es requerido',
                    'telefono_empresa.required' => 'El télefono de la empresa es requerido',
                    'telefono_empresa.numeric' => 'El télefono debe ser un dato númerico',
                    'direccion_empresa.required' => 'La dirección de la empresa es requerida',
                    'nit_empresa.required' => 'El NIT de la empresa es requerido',


                ]
                );


            $empresa = compromiso::findOrFail($id);
            $empresa->nombre_empresa = $request->nombre_empresa;
            $empresa->direccion = $request->direccion_empresa;
            $empresa->nit = $request->nit_empresa;
            $empresa->telefono = $request->telefono_empresa;
            $empresa->save();
            return back()->with('message','La empresa fue actualizada correctamente');
            */
        }

        public function delete($id){

        Compromiso::where('id', $id)->delete();
        return back();

        }
}

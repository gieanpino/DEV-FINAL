<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aliado;

class AliadosController extends Controller
{
    public function index(){

        $aliado = Aliado::get();

        //dd($aliado);

        return view('aliado.index', [
            'aliado' => $aliado,
        ]);
        }

        public function create(){
        return view('aliado.new_aliado');
        }

        public function show($id){

        }

        public function edit($id){

            /*$empresa = aliado::findOrFail($id);
            $empresa = aliado::where('id', $id)->first();

            return view('aliado.edit_empresa', [
                'empresa' => $empresa,
            ]);*/
        }

        public function store(Request $request){
            /*
            $request->validate(
                [
                    'nombre_empresa'=>'required|max:500',
                    'telefono_empresa'=>'required|numeric|unique:aliado,telefono',
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


            $empresa = new aliado;
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


            $empresa = aliado::findOrFail($id);
            $empresa->nombre_empresa = $request->nombre_empresa;
            $empresa->direccion = $request->direccion_empresa;
            $empresa->nit = $request->nit_empresa;
            $empresa->telefono = $request->telefono_empresa;
            $empresa->save();
            return back()->with('message','La empresa fue actualizada correctamente');
            */
        }

        public function delete($id){

        Aliado::where('id', $id)->delete();
        return back();

        }

}

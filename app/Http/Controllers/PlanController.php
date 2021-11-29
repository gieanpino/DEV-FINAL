<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index(){

        $plan = Plan::get();

        //dd($plan);

        return view('plan.index', [
            'plan' => $plan,
        ]);
        }

        public function create(){
        return view('plan.new_plan');
        }

        public function show($id){

        }

        public function edit($id){

            /*$empresa = plan::findOrFail($id);
            $empresa = plan::where('id', $id)->first();

            return view('plan.edit_empresa', [
                'empresa' => $empresa,
            ]);*/
        }

        public function store(Request $request){
            /*
            $request->validate(
                [
                    'nombre_empresa'=>'required|max:500',
                    'telefono_empresa'=>'required|numeric|unique:plan,telefono',
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


            $empresa = new plan;
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


            $empresa = plan::findOrFail($id);
            $empresa->nombre_empresa = $request->nombre_empresa;
            $empresa->direccion = $request->direccion_empresa;
            $empresa->nit = $request->nit_empresa;
            $empresa->telefono = $request->telefono_empresa;
            $empresa->save();
            return back()->with('message','La empresa fue actualizada correctamente');
            */
        }

        public function delete($id){

        Plan::where('id', $id)->delete();
        return back();

        }
}

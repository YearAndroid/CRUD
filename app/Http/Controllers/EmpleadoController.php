<?php

namespace App\Http\Controllers;

use App\empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class EmpleadoController extends Controller
{
    //
    public function create(){
        return view('Empleados.create');
    }

        public function insertar(){

        }
        public function index(){

            //$datos['empleado']=empleado::paginate(5);
            $datos = DB::table('empleado')->get();
            return view('Empleados.index',['datos'=>$datos]);

            //return view('empleado',$datos);
        }


    public function store(Request $request)
    {
       // $datosEmpleados= request()->all();
        $datosEmpleados= request()->except('_token');
             empleado::insert($datosEmpleados);
        //return response()->json($datosEmpleados);
        return Redirect::to('/empleado/index')->with('Mensaje','Empleado agregado con exito');


    }


    public function eliminar($id){
        $persona = empleado::findOrFail($id);
        $persona->delete();
        //empleado::destroy($id);
       // return  view('Empleados.index');
       return Redirect::to('/empleado/index')->with('Mensaje','Empleado eliminado con exito');
    }

    /* se hace asi maycol 
    */


    public function editar($id){
        $empleado= empleado::findOrFail($id);
        return view('Empleados.edit',compact('empleado'));
    }


    public function actualizar(Request $request, $id){
        $datosEmpleados= request()->except(['_token','_method']);
        empleado::where('id',"=",$id)->update($datosEmpleados);
      /*   $empleado= empleado::findOrFail($id);
        return view('Empleados.edit',compact('empleado')); */
        return Redirect::to('/empleado/index')->with('Mensaje','Empleado modificado con exito');
    }
}

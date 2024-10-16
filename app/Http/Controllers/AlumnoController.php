<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $alumnos;
    public $val;

     function __construct(){
        $this->alumnos = Alumno::paginate(5);
        $this->val=[
            'nombre'=>['required', 'min:3','max:50','regex:/^[\p{L}\s]+$/u'],
            'apellidop'=>'required',
            'apellidom'=>'required',
            'email'=>'required'
        ];
     }
    
    public function index()
    {
        //$alumnos=Alumno::get();
        //return view("alumnos/index",['alumnos'=>$alumnos]);
        //return view("alumnos/index", compact("alumnos"));
        return view("alumnos2/index", ["alumnos"=>$this->alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$alumnos = Alumno::get();
        //return view("alumnos/create", compact("alumnos"));
        $alumno = new Alumno;
        $pars = 
         ["alumnos"=>$this->alumnos,
        "alumno"=>$alumno,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("alumnos2/frm",$pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->all();
        //Aqui graba los datos
        //El request toma el arreglo all
        $validado=$request->validate($this->val);//al momento de ingresar el formulario revisa que tengas todos los datos requeridos
        //sino te regresa a donde fue llamado y la parte de abajo nisiquiera se corre

        Alumno::create($validado);
        return redirect()->route("alumnos.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        $pars2 =
        ["alumnos"=>$this->alumnos,
        'alumno'=>$alumno,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];

        return view("alumnos2/frm", $pars2 );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $pars3 =
        [
            "alumnos"=>$this->alumnos,
             "alumno"=>$alumno,
             "accion"=>"E",
             "des"=>"enabled",
             "txtbtn"=>"EDITAR"
        ];

        return view("alumnos2/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $validado=$request->validate($this->val);
        $alumno->update($validado);
        return redirect()->route("alumnos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        ///Aqui eliminare el registro
        $alumno->delete();
        return redirect()->route("alumnos2.index");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $puestos;
    public $val;

     function __construct(){
        $this->puestos = Puesto::paginate(5);
        $this->val=[
            'idPuesto'=>['required', 'min:3','max:50','regex:/^[\p{L}\s]+$/u'],
            'nombre'=>'required',
            'tipo'=>'required'
        ];
    }

    public function index()
    {
        return view("puestos2/index", ["puestos"=>$this->puestos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $puesto = new Puesto;
        $pars = 
         ["puestos"=>$this->puestos,
        "puesto"=>$puesto,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("puestos2/create", $pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validado=$request->validate($this->val);

        Puesto::create($validado);
        return redirect()->route("puestos.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Puesto $puesto)
    {
        $pars2 =
        ["puestos"=>$this->puestos,
        'puesto'=>$puesto,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];

        return view("puestos2/frm", $pars2);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Puesto $puesto)
    {
            $pars3 =
            ["puestos"=>$this->puestos,
            'puesto'=>$puesto,
            "accion"=>"E",
            "des"=>"enabled",
            "txtbtn"=>"Editar"
        ];

        return view("puestos2/frm", $pars3);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Puesto $puesto)
    {
        $validado=$request->validate($this->val);
        $puesto->update($validado);
        return redirect()->route("puestos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Puesto $puesto)
    {
        $puesto->delete();
        return redirect()->route("puestos.index");
    }
}

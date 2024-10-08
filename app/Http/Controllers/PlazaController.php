<?php

namespace App\Http\Controllers;

use App\Models\Plaza;
use Illuminate\Http\Request;

class PlazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public $plazas;
     public $val;

     function __construct(){
        $this->plazas = Plaza::paginate(5);
        $this->val=[
            'idPlaza'=>['required', 'min:3','max:50','regex:/^[\p{L}\s]+$/u'],
            'nombrePlaza'=>'required',
        ];
    }

    public function index()
    {
        return view("plazas/index", ["plazas"=>$this->plazas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plaza = new Plaza;
        $pars = 
         ["plazas"=>$this->plazas,
        "plaza"=>$plaza,
         "accion"=>"C",
         "des"=>"",
         "txtbtn"=>"INSERTAR"
        ];
        return view("plazas2/create", $pars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validado=$request->validate($this->val);

        Plaza::create($validado);
        return redirect()->route("plazas.index")->with('mensaje','El registro se inserto correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plaza $plaza)
    {
        $pars2 =
        ["plazas"=>$this->plazas,
        'plaza'=>$plaza,
        "accion"=>"S",
        "des"=>"disabled",
        "txtbtn"=>"ELIMINAR"
    ];

        return view("plazas2/frm", $pars2);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plaza $plaza)
    {
        $pars3 =
        ["plazas"=>$this->plazas,
        'plaza'=>$plaza,
        "accion"=>"E",
        "des"=>"enabled",
        "txtbtn"=>"Editar"
    ];

    return view("plazas2/frm", $pars3);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plaza $plaza)
    {
        $validado=$request->validate($this->val);

        $plaza->update($validado);
        return redirect()->route("plazas.index")->with('mensaje','El registro se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plaza $plaza)
    {
        $plaza->delete();
        return redirect()->route("plazas.index");
    }
}

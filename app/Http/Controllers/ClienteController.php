<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public $cprFicha = [
        [
            'id' => 1,
            'nit' =>54545451122,
            'nombre' => 'Daniel Mercado',
            'consecutivo' => 1,
            'estado' => 'Activo',
        ],
        [
            'id' => 2,
            'nit' => 45454555455,
            'nombre' => 'Erlin Herrera',
            'consecutivo' => 2,
            'estado' => 'Activo',
        ],
        [
            'id' => 3,
            'nit' => 14545455666,
            'nombre' => 'Zandor Mercado',
            'consecutivo' => 3,
            'estado' => 'Activo',
        ]
    ];

    public $cprDetalleFicha = [
        [
            'id' => 1,
            'id_ficha' => 1,
            'cod_personal' => 1,
            'cantidad_personal' => 45,
            'categoria' => 'auxilios',
            'presupuesto' => 2000000,
        ],

        [
            'id' => 2,
            'id_ficha' => 2,
            'cod_personal' => 2,
            'cantidad_personal' => 145,
            'categoria' => 'transporte',
            'presupuesto' => 3000000,
        ],

        [
            'id' => 3,
            'id_ficha' => 3,
            'cod_personal' => 3,
            'cantidad_personal' => 245,
            'categoria' => 'Dotacion',
            'presupuesto' => 4000000,
        ]
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        return $this->cprFicha;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function filter_by_value ($array, $index, $value){
        if(is_array($array) && count($array)>0) 
        {
            foreach(array_keys($array) as $key){
                $temp[$key] = $array[$key][$index];
                
                if ($temp[$key] == $value){
                    $newarray[] = $array[$key];
                }
            }
          }
      return $newarray;
    }
    
    public function show($id)
    {

        $filtro = $this->filter_by_value($this->cprDetalleFicha, 'id_ficha', $id);

        return $filtro;
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

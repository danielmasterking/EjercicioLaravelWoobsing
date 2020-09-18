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
    
    public function index()
    {
        
        
        return $this->cprFicha;

    }

  
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

    public function search($buscar = '') {


        $filtro = $this->filter_by_value($this->cprFicha, 'consecutivo', $buscar);

        return $filtro;
    }

   

   
}

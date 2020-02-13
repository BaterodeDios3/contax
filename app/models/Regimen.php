<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Regimen extends Model
{
    public static function listadoRegimen () {
                
        $regimenes = DB::table('vistaRegi')->get();            
        //->paginate();
        return view('regimen.index', compact('regimenes'));
    }

}

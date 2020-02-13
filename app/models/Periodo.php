<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Validator;
use App\models\Periodo;

class Periodo extends Model
{ 

    protected $fillable = [
		'fecha_inicio',
		'fecha_fin'
	];

    public static function listadoPeriodo ($request) {
                
        //$periodos = DB::table('vistaPeriodos')->get();            
        //->paginate();
        //return view('periodos.index', compact('periodos'));
        if ($request) {

            $query=trim($request->get('search')); 

            $periodos = DB::table('vistaPeriodos')
                ->where('inicio','LIKE','%'.$query.'%')
                ->paginate(10);
            return view('periodos.index', compact('periodos','query'));

        }


    }

    public static function guardarPeriodo($request){
        
        
        $rules = [
            'fecha_inicio' => 'required',
               'fecha_fin' => 'required',
        ];

        $validator=Validator::make($request->all(), $rules);
        if($validator->fails()){
           
            //return response()->json($validator->errors(), 400);
        }
        DB::select('call CreaPeriodo(?,?)',array(
            $request->get("fecha_inicio"),
            $request->get("fecha_fin"),
        ));

        return redirect()->route('periodos.index')
        ->with('info','Periodo creado existosamente');
    }
}

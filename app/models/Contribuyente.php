<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Contribuyente extends Model
{

    public static function listadoContribuyentes ($request) {
        if ($request) {

            $query=trim($request->get('search')); 

            $contribuyentes = DB::table('VerContri')
                ->where('nombre','LIKE','%'.$query.'%')
                ->paginate(10);
            return view('contribuyentes.index', compact('contribuyentes','query'));

        }
    }

    public static function mostrarRegimen(){
        $regim = DB::table('VerRegi')->get();
        return view('contribuyentes.create', compact('regim'));
    }

    /*public static function listadoContribuyentes//(){
        $contribuyentes = DB::table('VerContri')->get();            
        //->paginate();
        return view('contribuyentes.index', compact//('contribuyentes'));
    *}
    */
}

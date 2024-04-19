<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class teszt extends Controller
{
    public function show2($id){
        $kat=DB::table('teszts')
        ->select('teszts.*','kategorias.kategorianev')
        ->join('kategorias','kategorias.id','=','teszts.kategoriaId')
        ->where('teszts.id','=',$id)
        ->get();
        return $kat;
    }
    public function show(){
        $kat=DB::table('teszts')
        ->select('teszts.*')
        ->get();
        return $kat;
    }
}

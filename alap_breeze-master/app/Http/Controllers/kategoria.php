<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategoria extends Controller
{
    public function showk(){
        $kat=DB::table('kategorias')
        ->select('kategorias.*')
        ->get();
        return $kat;
    }
}

<?php

namespace App\Http\Controllers\Api;

use Jajo\NG;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    public function getLGA($state)
    {
        $ng = new NG();
        $Lgas = $ng->getLGA($state);     
        
        return response()->json($Lgas);
    }
}

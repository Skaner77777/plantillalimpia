<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    public function indexPlantilla()
    {
        return view('plantilla.indexPlantilla');
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Contenedor;

class ContenedorController extends Controller
{
    public function getAll(){
        $data = Contenedor::get();
        return response()->json($data, 200);
    }
    public function get($id){
        $data = Contenedor::find($id);
        return response()->json($data, 200);
      }
}

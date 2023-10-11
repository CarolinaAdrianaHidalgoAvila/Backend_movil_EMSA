<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Tutorial;
class TutorialController extends Controller
{
    public function getAll(){
        $data = tutorial::get();
        return response()->json($data, 200);
    }
    public function get($id){
        $data = tutorial::find($id);
        return response()->json($data, 200);
      }
}

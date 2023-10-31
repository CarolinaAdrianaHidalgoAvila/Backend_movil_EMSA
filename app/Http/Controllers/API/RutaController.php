<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DetalleRuta;
use App\Models\Frecuencia;
use App\Models\PuntoLinea;
use App\Models\Ruta;
use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function obtenerDetallesPorZona($zona)
    {
        // Define un mapeo de distritos a zonas
        $mapeoDistritos = [
            'zona_norte' => ['Distrito 1', 'Distrito 2', 'Distrito 13'],
            'zona_oeste' => ['Distrito 3', 'Distrito 4'],
            'zona_sud' => ['Distrito 5', 'Distrito 6', 'Distrito 9'],
            'zona_sudeste' => ['Distrito 7', 'Distrito 8', 'Distrito 14'],
            'zona_centrica_este' => ['Distrito 10', 'Distrito 11', 'Distrito 12'],
        ];

        // Verifica si la zona proporcionada existe en el mapeo
        if (array_key_exists($zona, $mapeoDistritos)) {
            // Obtiene los distritos correspondientes a la zona
            $distritos = $mapeoDistritos[$zona];

            // Obtiene los detalles de la ruta para los distritos de la zona
            $detalles = DetalleRuta::whereIn('distrito', $distritos)->get();

            return response()->json(['detalles' => $detalles], 200);
        }

        return response()->json(['message' => 'Zona no válida'], 400);
    }

    public function getRuta($id){
        $data = Ruta::find($id);
        return response()->json($data, 200);
      }
    public function getPuntosRuta($id) {
        $puntos = PuntoLinea::where('idRuta', $id)->orderBy('orden')->get();
        return response()->json($puntos, 200);
    }
    public function getFrecuencia($idDetalleRuta) {
        $data = Frecuencia::where('idDetalleRuta', $idDetalleRuta)->get();
        return response()->json($data, 200);
    }
    public function getDetalleRuta($idRuta){
        $data = DetalleRuta::where('idRuta', $idRuta)->first();
        return response()->json($data, 200);
    }
}

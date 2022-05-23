<?php

namespace App\Http\Controllers;

use App\Http\Resources\CodigoPostalResource;
use App\Http\Resources\CodigoPostalCollection;
use App\Models\CodigoPostal;
use Illuminate\Http\Request;

class CodigoPostalController extends Controller
{
    public function search($zip_code)
    {
        $codigos = CodigoPostal::where('d_codigo', $zip_code)->orderBy('id_asenta_cpcons', 'ASC')->get();
        if (count($codigos) > 0) {
            $response = [
                'zip_code' => str_pad($codigos[0]->d_codigo, 5, "0", STR_PAD_LEFT),
                'locality' => is_null($codigos[0]->d_ciudad) ? '' : mb_strtoupper($codigos[0]->d_ciudad),
                'federal_entity' => [
                    'key' => $codigos[0]->c_estado,
                    'name' => mb_strtoupper($codigos[0]->d_estado),
                    'code' => null,
                ],
                'settlements' => new CodigoPostalCollection($codigos),
                'municipality' => [
                    'key' => $codigos[0]->c_mnpio,
                    'name' => mb_strtoupper($codigos[0]->d_mnpio),
                ]
            ];

            return response()->json($response);
        }
        abort(404);
    }
}

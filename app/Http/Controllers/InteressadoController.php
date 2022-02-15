<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInteressadoRequest;
use Illuminate\Http\Request;
use App\Models\Interessado;

class InteressadoController extends Controller
{
    public function getInteressado() {

        return response()->json(Interessado::all(), 200);

    }

    public function addInteressado(StoreInteressadoRequest $request) {

        $interessado = Interessado::create($request->all());

        return response($interessado, 201);

    }

    public function updateInteressado(Request $request, $id) {

        $interessado = Interessado::find($id);

        if(is_null($interessado)) {

            return response()->json(['message' => 'Interessado não encontrado'], 404);

        }

        $interessado->update($request->all());

        return response($interessado, 200);
    }

    public function deleteInteressado(Request $request, $id)
    {

        $interessado = Interessado::find($id);

        if (is_null($interessado)) {

            return response()->json(['message' => 'Interessado não encontrado'], 404);

        }

        $interessado->delete();

        return response()->json(null, 204);
    }
}

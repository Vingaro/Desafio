<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImovelRequest;
use Illuminate\Http\Request;
use App\Models\Imovel;

class ImovelController extends Controller
{
    private $imoveis;

    public function __construct(Imovel $imoveis)
    {

        $this->imoveis = $imoveis;

    }

    public function getImovel(Request $request) {

        $imoveis = $this->imoveis;

        if ($request->codigo !== null) {
            $imoveis = $imoveis->where('codigo', 'like', '%'.$request->codigo.'%');
        }

        if ($request->tipo !== null) {
            $imoveis = $imoveis->where('tipo', $request->tipo);
        }

        if ($request->pretensao !== null) {
            $imoveis = $imoveis->where('pretensao', $request->pretensao);
        }

        if ($request->titulo !== null) {
            $imoveis = $imoveis->where('titulo', $request->titulo);
        }

        if ($request->detalhes !== null) {
            $imoveis = $imoveis->where('detalhes', $request->detalhes);
        }

        if ($request->quartos !== null) {
            $imoveis = $imoveis->where('quartos', $request->quartos);
        }

        if($request->valor !== null){
            $imoveis = $imoveis->where('valor', $request->valor);
        }

        if($request->max !== null && $request->min){
            $imoveis = $imoveis->whereBetween('valor',[$request->min, $request->max]);
        }

        $data = $imoveis->get();

        return response()->json([

            'data' => $data,
            'message' => 'Filtrado com sucesso'
        ], 200);

    }

    public function addImovel(StoreImovelRequest $request) {

        $imovel = Imovel::create($request->all());

        return response($imovel, 201);

    }

    public function updateImovel(Request $request, $id) {

        $imovel = Imovel::find($id);

        if(is_null($imovel)) {

            return response()->json(['message' => 'Imóvel não encontrado'], 404);

        }

        $imovel->update($request->all());

        return response($imovel, 200);
    }

    public function deleteImovel(Request $request, $id) {

        $imovel = Imovel::find($id);

        if(is_null($imovel)) {

            return response()->json(['message' => 'Imóvel não encontrado'], 404);

        }

        $imovel->delete();

        return response()->json(null, 204);

    }

}

<?php

namespace App\Http\Controllers;


use App\Model\Prodotto;
use http\Env\Response;

use Illuminate\Http\Request;

class ProdottoController extends Controller
{

    public function all()
    {
        return response()->json(Prodotto::all(),200);

    }

    public function find( $id)
    {
        return response()->json(Prodotto::find($id), 200);

    }

    public function put(Request $request)
    {
        $prodotto = new Prodotto();
        $prodotto->quantita = $request->quantita;
        $prodotto->prezzo = $request->prezzo;
        $prodotto->descrizione = $request->descrizione;
        $prodotto->categorie_id = $request->categorie_id;
        $prodotto->commerciante_id = $request->commerciante_id;

        if ($prodotto->save())
            return response()->json($prodotto, 200);
        return response()->json($request, 500);
    }

    public function patch( Request $request, $id)
    {

        $prodotto = Prodotto::find($id);

        $prodotto->quantita = $request->quantita;
        $prodotto->prezzo = $request->prezzo;
        $prodotto->descrizione = $request->descrizione;
        $prodotto->categorie_id = $request->categorie_id;
        $prodotto->commerciante_id = $request->commerciante_id;

        if ($prodotto->save())
            return response()->json($prodotto, 200);
        return response()->json($request, 500);

    }

    public function delete($id)
    {
        if (Prodotto::destroy($id))
            return response()->json("Eliminato", 200);
        return response()->json($id, 500);

    }

}

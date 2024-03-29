<?php

namespace App\Http\Controllers;

use App\Model\Ordini_Dettagli;
use Illuminate\Http\Request;

class OrdiniDettagliController extends Controller
{
    public function all()
    {
        return response()->json(Ordini_Dettagli::all(), 200);
    }

    public function find($id)
    {
        return response()->json(Ordini_Dettagli::find($id), 200);

    }

    public function put(Request $request)
    {
        $dettagli =  new Ordini_Dettagli();

        $dettagli->testata_id =  $request->testata_id;
        $dettagli->prodotti_id =  $request->prodotti_id;
        $dettagli->quantita  = $request->quantita;
        $dettagli->prezzo_unitario = $request->prezzo_unitario;
        if ($dettagli->save())
            return response()->json($dettagli, 200);
        return response()->json($request, 500);

    }

    public function patch( Request $request, $id)

    {
        $dettagli =  Ordini_Dettagli::find($id);

        $dettagli->testata_id =  $request->testata_id;
        $dettagli->prodotti_id =  $request->prodotti_id;
        $dettagli->quantita  = $request->quantita;
        $dettagli->prezzo_unitario = $request->prezzo_unitario;

        if ($dettagli->save())
            return response()->json($dettagli, 200);
        return response()->json($request, 500);

    }

    public function delete($id)
    {
        if (Ordini_Dettagli::destroy($id))
            return response()->json("Eliminato", 200);
        return response()->json($id, 500);

    }




}

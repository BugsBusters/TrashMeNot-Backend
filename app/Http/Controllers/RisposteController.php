<?php

namespace App\Http\Controllers;

use App\Model\Domanda;
use App\Model\Risposta;
use Illuminate\Http\Request;

class RisposteController extends Controller
{

    public function all($id)
    {
        return response()->json(Domanda::findOrFail($id)->with('risposte')->get(),200);
    }


    //risposta da id risposta
    public function find($id)
    {
        return response()->json(Risposta::find($id), 200);
    }

    //inserisci risposta per domanda
    public function put(Request $request, $dom_id)
    {
        $risposta = new Risposta();

        $risposta->risposta = $request->risposta;
        $risposta->esatto = $request->esatto;
        $risposta->domande_id = $dom_id;

        if ($risposta->save())
            return response()->json($risposta, 200);
        return response()->json($request, 500);
    }

    public function patch(Request $request, $id)
    {
        $risposta = Risposta::find($id);
        $risposta->risposta = $request->risposta;
        $risposta->esatto = $request->esatto;
        $risposta->domande_id = $request->domande_id;

        if ($risposta->save())
            return response()->json($risposta, 200);
        return response()->json($request, 500);
    }

    public function delete($id)
    {
        $risposta = Risposta::find($id);
        if (Risposta::destroy($id))
            return response()->json("eliminata", 200);
        return response()->json($id, 500);
    }


}

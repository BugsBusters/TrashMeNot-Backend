<?php

namespace App\Http\Controllers;

use App\Model\Domanda;
use Illuminate\Http\Request;

class DomandeController extends Controller
{
    public function all()
    {
        return response()->json(Domanda::all(), 200);
    }

    public function find($id)
    {
        return response()->json(Domanda::find($id), 200);
    }

    public function put(Request $request)
    {
        $domanda = new Domanda();
        $domanda->domanda = $request->domanda;
        $domanda->livello = $request->livello;
        if ($domanda->save())
            return response()->json($domanda, 200);
        return response()->json($request, 500);
    }

    public function patch(Request $request, $id)
    {
        $domanda= Domanda::find($id);
        $domanda->domanda = $request->domanda;
        $domanda->livello = $request->livello;
        if($domanda->save())
            return response()->json($domanda, 200);
        return response()->json($request,500);
    }

    public function delete($id)
    {
        if(Domanda::destroy($id))
            return response()->json("eliminata",200);
        return response()->json($id, 500);
    }
}

<?php

namespace App\Http\Controllers;

use App\Model\Ordine_Testata;
use Illuminate\Http\Request;

class OrdiniTestataController extends Controller
{

    public function all()
    {

        return response()->json(Ordine_Testata::all(), 200);

    }

    public function find($id)
    {
        return response()->json(Ordine_Testata::find($id), 200);
    }

    public function put(Request $request)
    {
        $ordini_testata = new Ordine_Testata();

        $ordini_testata->cliente_id = $request->cliente_id;
        $ordini_testata->venditore_id = $request->venditore_id;
        $ordini_testata->sconto = $request->sconto;
        $ordini_testata->totale = $request->totale;

        if ($ordini_testata->save())
            return response()->json($ordini_testata, 200);
        return response()->json($request, 500);
    }

    public function patch(Request $request, $id)
    {

        $ordini_testata =  Ordine_Testata::find($id);

        $ordini_testata->cliente_id = $request->cliente_id;
        $ordini_testata->venditore_id = $request->venditore_id;
        $ordini_testata->sconto = $request->sconto;
        $ordini_testata->totale = $request->totale;

        if ($ordini_testata->save())
            return response()->json($ordini_testata, 200);
        return response()->json($request, 500);

    }

    public function delete($id)
    {
        if (Ordine_Testata::destroy($id))
            return response()->json("Eliminato", 200);
        return response()->json($id, 500);
    }



}

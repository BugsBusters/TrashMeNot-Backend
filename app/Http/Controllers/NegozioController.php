<?php

namespace App\Http\Controllers;

use App\Model\Negozio;
use http\Env\Response;
use Illuminate\Http\Request;

class NegozioController extends Controller
{

    public function all()
    {
        return response()->json(Negozio::all(), 200);

    }


    public function find($id)

    {

        return response()->json(Negozio::find($id), 200);

    }

    public function put (Request $request) {

        $negozio =  new Negozio();

        $negozio->nome= $request->nome;
        $negozio->p_iva =  $request->p_iva;
        $negozio->user_id = $request->user_id;

        if ($negozio->save())
            return response()->json($negozio, 200);
        return  response()->json($request, 500);

    }


    public function patch(Request $request, $id)
    {
        $negozio =  Negozio::find($id);

        $negozio->nome= $request->nome;
        $negozio->p_iva =  $request->p_iva;
        $negozio->user_id = $request->user_id;

        if($negozio->save())
            return response()->json($negozio, 200);
        return  response()->json($request, 500);



    }



    public function delete($id)
    {
        if (Negozio::destroy($id))
            return response()->json("Eliminato", 200);
        return response()->json($id, 500);
    }

    /**
     * Metodo che prende tutti i prodotti di un negozio
     *
     */

    public function AllProdotti($id)
    {
        return response()->json(Negozio::findOrFail($id)->with('prodotti')->get(),200);

    }



}

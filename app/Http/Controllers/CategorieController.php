<?php

namespace App\Http\Controllers;

use App\Model\Categoria;
use Illuminate\Http\Request;

class CategorieController extends Controller
{


    public function all()
    {
        return response()->json(Categoria::all(), 200);
    }


    public function find($id)
    {
        return response()->json(Categoria::find($id), 200);

    }

    public function put(Request $request)
    {
        $categoria = new Categoria();
        $categoria->categoria = $request->categoria;
        if ($categoria->save())
            return response()->json($categoria, 200);
        return response()->json($request, 500);

    }

    public function patch(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        $categoria->categoria = $request->categoria;
        if ($categoria->save())
            return response()->json($categoria, 200);
        return response()->json($request, 500);
    }

    public function delete($id)
    {
        if(Categoria::destroy($id))
            return response()->json("Eliminato", 200);
        return response()->json($id, 500);
    }

}

<?php

namespace App\Http\Controllers;

use App\Model\Blog;
use Illuminate\Http\Request;

class TipsController extends Controller
{
    public function all()
    {
        return response()->json(Blog::all(), 200);
    }

    public function find($id)
    {
        return response()->json(Blog::find($id), 200);
    }

    public function put(Request $request)
    {
        $tip = new Blog();
        $tip->titolo = $request->titolo;
        $tip->descrizione = $request->descrizione;
        if ($tip->save())
            return response()->json($tip, 200);
        return response()->json($request, 500);
    }

    public function patch(Request $request, $id)
    {
        $tip = Blog::find($id);
        $tip->titolo = $request->titolo;
        $tip->descrizione = $request->descrizione;
        if($tip->save())
            return response()->json($tip, 200);
        return response()->json($request,500);
    }

    public function delete($id)
    {
        if(Blog::destroy($id))
            return response()->json("eliminato",200);
        return response()->json($id, 500);
    }


}

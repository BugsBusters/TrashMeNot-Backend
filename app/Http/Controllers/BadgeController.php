<?php

namespace App\Http\Controllers;

use App\Model\Badge;
use Illuminate\Http\Request;

class BadgeController extends Controller
{


    public function all()
    {

        return response()->json(Badge::all(), 200);

    }

    public function find($id)
    {
        return response()->json(Badge::find($id), 200);

    }

    public function put(Request $request)
    {
        $badge = new Badge();
        $badge->foto = $request->foto;
        $badge->testo = $request->testo;
        $badge->punti = $request->punti;
        if ($badge->save())
            return response()->json($badge, 200);
        return response()->json($request, 500);

    }

    public function patch(Request $request, $id)
    {
        $badge = Badge::find($id);
        $badge->foto = $request->foto;
        $badge->testo = $request->testo;
        $badge->punti = $request->punti;

        if ($badge->save())
            return response()->json($badge, 200);
        return response()->json($request, 500);
    }

    public function delete($id)
    {
        if(Badge::destroy($id))
            return response()->json("Eliminato", 200);
        return response()->json($id, 500);
    }


}

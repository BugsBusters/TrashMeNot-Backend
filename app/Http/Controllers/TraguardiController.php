<?php

namespace App\Http\Controllers;

use App\Model\Badge;
use App\Model\Traguardo;
use App\User;
use Illuminate\Http\Request;

class TraguardiController extends Controller
{
    public function all()
    {
        return response()->json(Traguardo::all(), 200);
    }

    public function find($id)
    {
        return response()->json(Traguardo::find($id), 200);

    }
    public function put(Request $request)
    {
        $traguardo = new Traguardo();
        $traguardo->user_id = $request->user_id;
        $traguardo->badge_id = $request->badge_id;
        if ($traguardo->save())
            return response()->json($traguardo, 200);
        return response()->json($request, 500);

    }

    public function patch(Request $request, $id)
    {
        $traguardo = Traguardo::find($id);
        $traguardo->user_id = $request->user_id;
        $traguardo->badge_id = $request->badge_id;
        if ($traguardo->save())
            return response()->json($traguardo, 200);
        return response()->json($request, 500);
    }

    public function delete($id)
    {
        if(Traguardo::destroy($id))
            return response()->json("Eliminato", 200);
        return response()->json($id, 500);
    }

    public function userBadges($id)
    {
        return response()->json(Badge::findOrFail($id)->with('traguardo')->get(), 200);
    }



}

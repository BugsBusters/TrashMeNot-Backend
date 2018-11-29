<?php

namespace App\Http\Controllers;

use App\Model\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{

    public function all()
    {

        return response()->json(Rate::all(), 200);

    }

    public function find($id)
    {
        return response()->json(Rate::find($id), 200);

    }

    public function put(Request $request)
    {
        $rate = new Rate();

        $rate->user_id = $request->user_id;
        $rate->rate = $request->rate;
        $rate->prodotti_id = $request->prodotti_id;
        if ($rate->save())
            return response()->json($rate, 200);
        return response()->json($request, 500);

    }

    public function patch(Request $request, $id)
    {
        $rate = Rate::find($id);

        $rate->user_id = $request->user_id;
        $rate->rate = $request->rate;
        $rate->prodotti_id = $request->prodotti_id;
        if ($rate->save())
            return response()->json($rate, 200);
        return response()->json($request, 500);
    }

    public function delete($id)

    {
        if(Rate::destroy($id))
            return response()->json("Eliminato", 200);
        return response()->json($id, 500);
    }


}

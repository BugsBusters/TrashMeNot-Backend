<?php

namespace App\Http\Controllers;

use App\Model\Traguardo;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function find($id)
    {
        return response()->json(User::find($id), 200);
    }


    public function badges($id)
    {
        //return response()->json(Traguardo::findOrFail($id)->with('risposte')->get(),200);
        return response()->json(Traguardo::find($id)->with(), 200);
    }
}

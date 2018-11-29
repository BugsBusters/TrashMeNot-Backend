<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function all()
    {

        return response()->json(User::all(), 200);

    }


    public function find($id)
    {
        return response()->json(User::find($id), 200);

    }



}

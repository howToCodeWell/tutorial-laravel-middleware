<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(Request $request)
    {
        echo 'user/list?name=Peter';
        dd($request->input());
    }
}

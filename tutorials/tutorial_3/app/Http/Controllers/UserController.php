<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginAsEditor(Request $request)
    {
        $role = Role::where('name', 'editor')->first();
        $user = User::where('role_id', $role->id)->first();

        Auth::login($user);

        return redirect('/');
    }

    public function loginAsManager(Request $request)
    {
        $role = Role::where('name', 'manager')->first();
        $user = User::where('role_id', $role->id)->first();

        Auth::login($user);

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}

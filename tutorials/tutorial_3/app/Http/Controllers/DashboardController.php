<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $role = Role::where('id', $user->role_id)->first();

        return View('dashboard', [
            'role' => $role,
            'user' => $user
        ]);
        
    }
}

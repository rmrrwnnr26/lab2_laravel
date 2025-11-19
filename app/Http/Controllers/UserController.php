<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(string $id)
    {
        $user = User::with(['services', 'services.category'])->find($id);
        
        return view('user_show', [
            'user' => $user
        ]);
    }
}
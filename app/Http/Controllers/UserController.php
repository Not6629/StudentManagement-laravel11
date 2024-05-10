<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::paginate();
        return view('users.index', compact('users'));
    }

    public function reset()
    {
        return view('passwords.reset');
    }

    public function repassword(Request $request)
    {
        $email = $request->email;
        $password = $request->name;
        User::where('email', $email)->update(['password' => Hash::make($password->password)]);
        return redirect('/');
    }
}

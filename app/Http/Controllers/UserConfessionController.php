<?php

namespace App\Http\Controllers;

use App\Models\UserConfession;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

class UserConfessionController extends Controller
{
    public function showRegistrationForm(){
        $user = UserConfession::all();
        return view('Confession.Forms.register');
    }
    //
    public function registration(Request $request){
        $user = UserConfession::all();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:user_confessions,username|max:255',
            'password' => 'required|string|min:5',
        
        ]);

    UserConfession::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('logging-page')->with('success', 'Registration successful. Please log in.');
    }

    public function login(Request $request){
        $credential = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        if (Auth::attempt($credential)) {
            $user = Auth::user();
            Session::put('username', $request->username);
            Session::put('name', $user->name);
            return redirect()->route('dashboard')->with('success', 'Login successful.');
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('logging-page')->with('success', 'You have been logged out successfully.');
    }
}

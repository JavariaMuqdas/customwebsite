<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\User;

class UserController extends Controller
{
  public function login(Request $request)
  {
    $user = User::where('email', $request->email)->first();

    if ($user && Hash::check($request->password, $user->password)) {
      $request->session()->put('user', $user);
      return redirect('/');
    }

    return back()->with('error', 'Invalid credentials');
  }

  public function register(Request $request)
  {
    // Validate the input
    $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email|max:255',
      'password' => 'required|string|min:6',
    ]);

    // ✅ Check if email already exists before inserting
    if (User::where('email', $request->email)->exists()) {
      Session::flash('error', 'Email already exists. Please login instead.');
      return redirect('/login'); // Redirect to login page
    }

    // If not exists, create a new user
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();

    Session::flash('success', 'Registration successful! Please login.');
    return redirect('/login');
  }
}

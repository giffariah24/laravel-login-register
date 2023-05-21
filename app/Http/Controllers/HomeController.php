<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => "Halaman Home",
        ]);
    }
    public function users()
    {
        $users = DB::table('users')->get();
        return view('users', [

            'title' => "Halaman List User",
            'users' => $users
        ]);
    }
    public function edit()
    {
        return view('edit', [
           'title' => 'Halaman Edit Profile',
            'user' => auth()->user(),
        ]);
    }
    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|min:5',
            'email' => 'required|string|email',
            'avatar' => 'required|mimes:jpeg,jpg,png|max:1024',
        ]);

        $user->update([
           'name' => $request->name,
           'email' => $request->email,
            'avatar' => $request->file('avatar')->store('avatar')
        ]);

        return Redirect('/home')->with(['success' => "Update Profile Success"]);
    }
}

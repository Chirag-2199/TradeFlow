<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // Use the constructor to apply middleware
    public function __construct()
    {
        $this->middleware('auth'); // Apply auth middleware to all methods
    }

    // Show the profile page
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    // Update the profile
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8|confirmed'
        ]);

        // Update user details
        $user->name = $request->name;
        $user->email = $request->email;

        // Update password if provided
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        // Redirect with success message
        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }
}
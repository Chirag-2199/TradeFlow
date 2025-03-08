<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }

    public function profile()
    {
        return view('pages.profile');
    }
    public function Userprofile()
    {
        return view('pages.profile');
    }

    public function settings()
    {
        return view('pages.settings');
    }

    public function reports()
    {
        return view('pages.reports');
    }

    public function notifications()
    {
        return view('pages.notifications');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
        return view('pages.finance');
    }

    public function create()
    {
        return view('finance.create');
    }

    public function store(Request $request)
    {
        // Logic to store finance data
    }

    public function show($id)
    {
        return view('finance.show');
    }

    public function edit($id)
    {
        return view('finance.edit');
    }
    public function reports()
{
    return view('finance.reports');
}

    public function update(Request $request, $id)
    {
        // Logic to update finance data
    }

    public function destroy($id)
    {
        // Logic to delete finance data
    }
}

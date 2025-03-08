<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        return view('pages.stock');
    }

    public function create()
    {
        return view('stocks.create');
    }

    public function store(Request $request)
    {
        // Logic to store stock
    }

    public function show($id)
    {
        return view('stocks.show');
    }

    public function edit($id)
    {
        return view('stocks.edit');
    }

    public function update(Request $request, $id)
    {
        // Logic to update stock
    }

    public function destroy($id)
    {
        // Logic to delete stock
    }
}

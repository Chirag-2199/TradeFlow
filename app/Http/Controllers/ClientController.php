<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('pages.clients');
    }

    public function create()
    {
        return view('pages.clients.create');
    }

    public function store(Request $request)
    {
        // Logic to store client
    }

    public function show($id)
    {
        return view('clients.show');
    }

    public function edit($id)
    {
        return view('clients.edit');
    }

    public function update(Request $request, $id)
    {
        // Logic to update client
    }

    public function destroy($id)
    {
        // Logic to delete client
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller {
    public function index() {
        $clients = Client::all(); // Fetch all clients
        return view('pages.clients', compact('clients'));
    }

    public function create() {
        return view('pages.clients.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'nullable|string|max:15',
            'company' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:500',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')->with('success', 'Client added successfully!');
    }
    public function show($id)
{
    $client = Client::find($id);

    if (!$client) {
        return redirect()->route('clients.index')->with('error', 'Client not found.');
    }

    return view('pages.clients.show', compact('client'));
}
}

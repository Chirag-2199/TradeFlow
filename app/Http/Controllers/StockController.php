<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\StockAddedMail;
use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        return view('pages.stock', compact('stocks'));
    }

    public function create()
    {
        return view('pages.stock.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'item_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'supplier' => 'nullable|string|max:255',
            'purchase_date' => 'nullable|date',
            'unit_price' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'email' => 'required|email'
        ]);
        
        $stock = Stock::create([
            'name' => $validated['name'],
            'quantity' => $validated['quantity'],
            'price' => $validated['price'],
            'category' => $validated['category'],
            'email' => $validated['email']
        ]);

        Stock::create($request->all());
        Mail::to($validated['email'])->send(new StockAddedMail($stock));

        return redirect()->route('stocks.index')->with('success', 'Stock item added successfully!');
    }

    public function show($id)
    {
        $stocks = Stock::findOrFail($id);
        return view('pages.stock.show', compact('stocks'));
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('pages.stock.edit', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'item_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'supplier' => 'nullable|string|max:255',
            'purchase_date' => 'nullable|date',
            'unit_price' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        $stock = Stock::findOrFail($id);
        $stock->update($request->all());

        return redirect()->route('stocks.index')->with('success', 'Stock item updated successfully!');
    }

    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();

        return redirect()->route('stocks.index')->with('success', 'Stock item deleted successfully!');
    }
}

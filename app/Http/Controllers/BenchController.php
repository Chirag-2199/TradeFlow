<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Client;

class BenchController extends Controller
{
    public function benchItem($type, $id)
    {
        // Define allowed models
        $models = [
            'stocks' => Stock::class,
            'clients' => Client::class,
        ];

        // Check if the type exists in the list
        if (!array_key_exists($type, $models)) {
            return response()->json(['error' => 'Invalid entity type'], 400);
        }

        // Fetch the correct model
        $model = $models[$type];
        $item = $model::find($id);

        if (!$item) {
            return response()->json(['error' => ucfirst($type) . ' not found'], 404);
        }

        // Update status
        $item->status = 'benched';
        $item->save();

        return response()->json(['message' => ucfirst($type) . ' item benched successfully', 'item' => $item]);
    }
    public function edit($type, $id)
{
    $models = [
        'stocks' => Stock::class,
        'clients' => Client::class,
    ];

    if (!array_key_exists($type, $models)) {
        return response()->json(['error' => 'Invalid entity type'], 400);
    }

    $model = $models[$type];
    $item = $model::find($id);

    if (!$item) {
        return response()->json(['error' => ucfirst($type) . ' not found'], 404);
    }

    return view('bench.edit', compact('item', 'type')); // Pass data to the view
}

public function update(Request $request, $type, $id)
{
    $models = [
        'stocks' => Stock::class,
        'clients' => Client::class,
    ];

    if (!array_key_exists($type, $models)) {
        return response()->json(['error' => 'Invalid entity type'], 400);
    }

    $model = $models[$type];
    $item = $model::find($id);

    if (!$item) {
        return response()->json(['error' => ucfirst($type) . ' not found'], 404);
    }

    // Validate the request
    $request->validate([
        'item_name' => 'required|string|max:255',
        'category' => 'nullable|string|max:255',
        'quantity' => 'required|integer',
        'supplier' => 'nullable|string|max:255',
        'unit_price' => 'required|numeric',
        'description' => 'nullable|string',
        'status' => 'required|string|in:active,benched',
    ]);

    // Update the item
    $item->update($request->all());

    return redirect()->route('bench.edit', [$type, $id])->with('success', ucfirst($type) . ' updated successfully!');
}

}

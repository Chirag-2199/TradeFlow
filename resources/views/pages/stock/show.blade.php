<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Details - TradeFlow</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white">
    <header class="bg-[#23297f] text-white py-4 px-6 shadow-xl">
        <div class="flex items-center justify-between max-w-7xl mx-auto">
            <img src="{{ asset('images/logo1.png') }}" alt="TradeFlow Logo" class="h-20 w-auto">
            <a href="{{ route('stocks.show', $stocks->id) }}" class="text-white hover:text-blue-200 transition">← Back to Inventory</a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-12 px-6">
        <div class="bg-white shadow-lg rounded-xl p-8">
            <h1 class="text-3xl font-bold text-[#23297f] mb-6">Stock Item Details</h1>
            <div class="grid grid-cols-2 gap-6">
                <p><strong>Item Name:</strong> {{ $stocks->item_name }}</p>
                <p><strong>Category:</strong> {{ $stocks->category }}</p>
                <p><strong>Quantity:</strong> {{ $stocks->quantity }}</p>
                <p><strong>Supplier:</strong> {{ $stocks->supplier }}</p>
                <p><strong>Purchase Date:</strong> {{ $stocks->purchase_date }}</p>
                <p><strong>Unit Price:</strong> ${{ $stocks->unit_price }}</p>
                <p class="col-span-2"><strong>Description:</strong> {{ $stocks->description }}</p>
            </div>
            <div class="mt-8 flex gap-4">
                <a href="{{ route('stocks.edit', $stocks->id) }}" class="bg-[#23297f] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#1a1f5f] transition">Edit</a>
                <form method="POST" action="{{ route('stocks.destroy', $stocks->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition">Delete</button>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-[#23297f] text-white py-12 text-center">
        <p class="text-blue-200 text-sm">&copy; 2023 TradeFlow. All rights reserved.</p>
    </footer>
</body>
</html>

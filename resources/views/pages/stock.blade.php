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
            <a href="{{ route('stocks.create') }}" class="text-white hover:text-blue-200 transition">+ Add New Stock</a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-12 px-6">
        <div class="bg-white shadow-lg rounded-xl p-8">
            <h1 class="text-3xl font-bold text-[#23297f] mb-6">Stock Inventory</h1>

            @if(session('success'))
                <div class="bg-green-100 text-green-700 px-4 py-2 rounded-lg mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <table class="w-full border-collapse border border-gray-200 shadow-lg">
                <thead>
                    <tr class="bg-[#23297f] text-white">
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Item Name</th>
                        <th class="border border-gray-300 px-4 py-2">Category</th>
                        <th class="border border-gray-300 px-4 py-2">Quantity</th>
                        <th class="border border-gray-300 px-4 py-2">Supplier</th>
                        <th class="border border-gray-300 px-4 py-2">Purchase Date</th>
                        <th class="border border-gray-300 px-4 py-2">Unit Price</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stocks as $stock)
                        <tr class="hover:bg-gray-100 transition">
                            <td class="border border-gray-300 px-4 py-2">{{ $stock->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $stock->item_name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $stock->category }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $stock->quantity }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $stock->supplier }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $stock->purchase_date }}</td>
                            <td class="border border-gray-300 px-4 py-2">${{ $stock->unit_price }}</td>
                            <td class="border border-gray-300 px-4 py-2 flex space-x-2">
                                <a href="{{ route('stocks.show', ['stock' => $stock->id]) }}" class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition">View</a>
                                <a href="{{ route('stocks.edit', $stock->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600 transition">Edit</a>
                                <form method="POST" action="{{ route('stocks.destroy', $stock->id) }}" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if($stocks->isEmpty())
                        <tr>
                            <td colspan="8" class="text-center text-gray-500 py-4">No stock items found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </main>

    <footer class="bg-[#23297f] text-white py-12 text-center">
        <p class="text-blue-200 text-sm">&copy; {{ date('Y') }} TradeFlow. All rights reserved.</p>
    </footer>
</body>
</html>

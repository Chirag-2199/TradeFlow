<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeFlow - Clients</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-white">
    <header class="bg-[#23297f] text-white py-4 px-6 shadow-xl">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">TradeFlow Clients</h1>
            <a href="{{ route('clients.create') }}" class="bg-white text-[#23297f] px-6 py-2 rounded-full font-semibold">+ New Client</a>
        </div>
    </header>

    <main class="min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-4xl font-bold text-[#23297f] mb-8">Client List</h1>

            <table class="w-full bg-white rounded-lg shadow-lg">
                <thead class="bg-[#23297f] text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">Name</th>
                        <th class="px-6 py-3 text-left">Email</th>
                        <th class="px-6 py-3 text-left">Phone</th>
                        <th class="px-6 py-3 text-left">Company</th>
                        <th class="px-6 py-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                        <tr class="border-b">
                            <td class="px-6 py-4">{{ $client->name }}</td>
                            <td class="px-6 py-4">{{ $client->email }}</td>
                            <td class="px-6 py-4">{{ $client->phone }}</td>
                            <td class="px-6 py-4">{{ $client->company }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('clients.show', $client->id) }}" class="text-blue-600">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>

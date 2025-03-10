<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Details - TradeFlow</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        @keyframes line-scroll {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .animate-line-scroll {
            animation: line-scroll 20s linear infinite;
        }

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-white">
    <header class="bg-[#23297f] text-white py-4 px-6 shadow-xl">
        <div class="flex items-center justify-between max-w-7xl mx-auto">
            <div class="flex items-center space-x-12">
                <img src="{{ asset('images/logo1.png') }}" alt="TradeFlow Logo" class="h-20 w-auto">
                <nav class="hidden md:block">
                    <ul class="flex space-x-8">
                        <li><a href="{{ route('dashboard') }}" class="hover:text-blue-200 transition-colors duration-300">Dashboard</a></li>
                        <li><a href="{{ route('clients.index') }}" class="hover:text-blue-200 transition-colors duration-300 font-semibold">Clients</a></li>
                    </ul>
                </nav>
            </div>
            <div class="flex items-center space-x-6">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-white text-[#23297f] px-6 py-2 rounded-full font-semibold hover:bg-opacity-90 transition-all duration-300 shadow-lg">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="bg-gradient-to-b from-white to-gray-50 min-h-screen py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-3xl font-bold text-[#23297f] text-center mb-8">Client Details</h2>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Name and Email -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Name</label>
                            <div class="bg-gray-50 p-4 rounded-lg text-gray-900">
                                {{ $client->name }}
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
                            <div class="bg-gray-50 p-4 rounded-lg text-gray-900">
                                {{ $client->email }}
                            </div>
                        </div>
                    </div>

                    <!-- Phone and Address -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Phone</label>
                            <div class="bg-gray-50 p-4 rounded-lg text-gray-900">
                                {{ $client->phone }}
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-600 mb-1">Address</label>
                            <div class="bg-gray-50 p-4 rounded-lg text-gray-900">
                                {{ $client->address ?? 'N/A' }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col md:flex-row justify-between items-center mt-8 gap-4">
                    <a href="{{ route('clients.index') }}" class="w-full md:w-auto bg-[#23297f] text-white px-6 py-3 rounded-lg font-semibold hover:bg-[#1a1f5f] transition-colors duration-300 shadow-lg text-center">
                        ← Back to Clients
                    </a>
                    
                    <div class="flex gap-4 w-full md:w-auto">
                        <a href="{{ route('clients.edit', $client->id) }}" class="w-full md:w-auto bg-yellow-400 text-gray-900 px-6 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition-colors duration-300 shadow-lg text-center">
                            ✏ Edit Client
                        </a>
                        
                        <form method="POST" action="{{ route('clients.destroy', $client->id) }}" class="w-full md:w-auto" onsubmit="return confirm('Are you sure you want to delete this client?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full bg-red-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-600 transition-colors duration-300 shadow-lg">
                                🗑 Delete Client
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#23297f] text-white py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex flex-col md:flex-row justify-center gap-8 mb-8">
                <a href="#" class="hover:text-blue-200 transition-colors">Client Support</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Documentation</a>
                <a href="#" class="hover:text-blue-200 transition-colors">API</a>
            </div>
            <p class="text-blue-200 text-sm">&copy; 2023 TradeFlow. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
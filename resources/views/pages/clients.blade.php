<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeFlow - Clients</title>
    
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
                        <li><a href="{{ route('stocks.index') }}" class="hover:text-blue-200 transition-colors duration-300">Stock</a></li>
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
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-4xl font-bold text-[#23297f]">Client Management</h1>
                <a href="{{ route('clients.create') }}" class="bg-[#23297f] text-white px-6 py-3 rounded-lg hover:bg-[#1a1f5f] transition-colors duration-300 shadow-lg">
                    + New Client
                </a>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <!-- Client Overview Card -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-[#23297f] text-2xl font-bold mb-2">1,234</div>
                    <div class="text-gray-600">Total Clients</div>
                    <div class="mt-4 pt-2 border-t border-gray-100">
                        <span class="text-green-500 text-sm">↑ 12% from last month</span>
                    </div>
                </div>

                <!-- Actions Card -->
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <h3 class="text-lg font-semibold text-[#23297f] mb-4">Quick Actions</h3>
                    <div class="space-y-3">
                        <a href="#" class="block p-3 hover:bg-gray-50 rounded-lg transition-colors">
                            📁 Import Clients
                        </a>
                        <a href="#" class="block p-3 hover:bg-gray-50 rounded-lg transition-colors">
                            📤 Export Data
                        </a>
                        <a href="#" class="block p-3 hover:bg-gray-50 rounded-lg transition-colors">
                            🗂️ Categories
                        </a>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-white p-6 rounded-2xl shadow-lg md:col-span-2">
                    <h3 class="text-lg font-semibold text-[#23297f] mb-4">Recent Activity</h3>
                    <div class="space-y-4">
                        <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                            <div class="bg-[#23297f] text-white p-2 rounded-full mr-3">
                                👤
                            </div>
                            <div>
                                <div class="font-medium">New client added</div>
                                <div class="text-sm text-gray-500">2 hours ago</div>
                            </div>
                        </div>
                        <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                            <div class="bg-[#23297f] text-white p-2 rounded-full mr-3">
                                ✉️
                            </div>
                            <div>
                                <div class="font-medium">Campaign sent to 50 clients</div>
                                <div class="text-sm text-gray-500">5 hours ago</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#23297f] text-white py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex flex-col md:flex-row justify-center gap-8 mb-8">
                <a href="#" class="hover:text-blue-200 transition-colors">Client Support</a>
                <a href="#" class="hover:text-blue-200 transition-colors">API Docs</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Training</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Compliance</a>
            </div>
            <p class="text-blue-200 text-sm">&copy; 2023 TradeFlow. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
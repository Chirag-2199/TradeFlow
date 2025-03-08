<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeFlow - Financial Management</title>
    
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
                        <li><a href="{{ route('finance') }}" class="hover:text-blue-200 transition-colors duration-300 font-semibold">Finance</a></li>
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
                <h1 class="text-4xl font-bold text-[#23297f]">Financial Overview</h1>
                <a href="#" class="bg-[#23297f] text-white px-6 py-3 rounded-lg hover:bg-[#1a1f5f] transition-colors duration-300 shadow-lg">
                    📊 Generate Report
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mb-8">
                <!-- Revenue Card -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-gray-600 text-sm mb-1">Total Revenue</div>
                            <div class="text-2xl font-bold text-[#23297f]">$245,230</div>
                        </div>
                        <div class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">
                            ↑ 12.5%
                        </div>
                    </div>
                    <div class="mt-4 h-1 bg-gray-100 rounded-full">
                        <div class="h-full bg-green-500 rounded-full w-3/4"></div>
                    </div>
                </div>

                <!-- Expenses Card -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-gray-600 text-sm mb-1">Total Expenses</div>
                            <div class="text-2xl font-bold text-[#23297f]">$148,450</div>
                        </div>
                        <div class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">
                            ↓ 4.2%
                        </div>
                    </div>
                    <div class="mt-4 h-1 bg-gray-100 rounded-full">
                        <div class="h-full bg-red-500 rounded-full w-2/5"></div>
                    </div>
                </div>

                <!-- Net Profit Card -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-gray-600 text-sm mb-1">Net Profit</div>
                            <div class="text-2xl font-bold text-[#23297f]">$96,780</div>
                        </div>
                        <div class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">
                            ↑ 18.1%
                        </div>
                    </div>
                    <div class="mt-4 h-1 bg-gray-100 rounded-full">
                        <div class="h-full bg-[#23297f] rounded-full w-2/3"></div>
                    </div>
                </div>
            </div>

            <!-- Financial Charts -->
            <div class="grid md:grid-cols-2 gap-6 mb-8">
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <h3 class="text-lg font-semibold text-[#23297f] mb-4">Revenue Breakdown</h3>
                    <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                        <!-- Add your chart here (Chart.js or other library) -->
                        <span class="text-gray-400">Revenue Chart</span>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-2xl shadow-lg">
                    <h3 class="text-lg font-semibold text-[#23297f] mb-4">Expense Categories</h3>
                    <div class="h-64 bg-gray-50 rounded-lg flex items-center justify-center">
                        <!-- Add your chart here (Chart.js or other library) -->
                        <span class="text-gray-400">Expense Chart</span>
                    </div>
                </div>
            </div>

            <!-- Recent Transactions -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-lg font-semibold text-[#23297f] mb-4">Recent Transactions</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="bg-[#23297f] text-white p-2 rounded-full mr-3">
                                💰
                            </div>
                            <div>
                                <div class="font-medium">Client Payment Received</div>
                                <div class="text-sm text-gray-500">Invoice #2456</div>
                            </div>
                        </div>
                        <div class="text-green-500 font-medium">+ $12,450</div>
                    </div>
                    <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="bg-[#23297f] text-white p-2 rounded-full mr-3">
                                🧾
                            </div>
                            <div>
                                <div class="font-medium">Supplier Payment</div>
                                <div class="text-sm text-gray-500">Vendor: ABC Supplies</div>
                            </div>
                        </div>
                        <div class="text-red-500 font-medium">- $8,230</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#23297f] text-white py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex flex-col md:flex-row justify-center gap-8 mb-8">
                <a href="#" class="hover:text-blue-200 transition-colors">Tax Docs</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Audit</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Compliance</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Forecasting</a>
            </div>
            <p class="text-blue-200 text-sm">&copy; 2023 TradeFlow. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
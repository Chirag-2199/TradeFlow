<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeFlow - Financial Reports</title>
    
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
                <h1 class="text-4xl font-bold text-[#23297f]">Financial Reports</h1>
                <div class="flex gap-4">
                    <button class="bg-[#23297f] text-white px-6 py-3 rounded-lg hover:bg-[#1a1f5f] transition-colors duration-300 shadow-lg">
                        📥 Export PDF
                    </button>
                    <button class="bg-[#23297f] text-white px-6 py-3 rounded-lg hover:bg-[#1a1f5f] transition-colors duration-300 shadow-lg">
                        📊 Export Excel
                    </button>
                </div>
            </div>

            <!-- Report Cards Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Annual Report -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-[#23297f]">2023 Annual Report</h3>
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded-full text-sm">New</span>
                    </div>
                    <p class="text-gray-600 mb-4">Complete financial overview for fiscal year 2023</p>
                    <div class="flex gap-2">
                        <button class="text-[#23297f] hover:bg-[#23297f]/10 px-4 py-2 rounded-lg transition-colors">
                            View
                        </button>
                        <button class="text-[#23297f] hover:bg-[#23297f]/10 px-4 py-2 rounded-lg transition-colors">
                            Download
                        </button>
                    </div>
                </div>

                <!-- Quarterly Report -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-[#23297f]">Q4 2023 Report</h3>
                        <span class="bg-blue-100 text-blue-600 px-2 py-1 rounded-full text-sm">Updated</span>
                    </div>
                    <p class="text-gray-600 mb-4">Fourth quarter financial performance analysis</p>
                    <div class="flex gap-2">
                        <button class="text-[#23297f] hover:bg-[#23297f]/10 px-4 py-2 rounded-lg transition-colors">
                            View
                        </button>
                        <button class="text-[#23297f] hover:bg-[#23297f]/10 px-4 py-2 rounded-lg transition-colors">
                            Download
                        </button>
                    </div>
                </div>

                <!-- Custom Report -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-semibold text-[#23297f]">Custom Reports</h3>
                        <span class="bg-purple-100 text-purple-600 px-2 py-1 rounded-full text-sm">Custom</span>
                    </div>
                    <p class="text-gray-600 mb-4">Generate tailored financial reports</p>
                    <div class="flex gap-2">
                        <button class="text-[#23297f] hover:bg-[#23297f]/10 px-4 py-2 rounded-lg transition-colors">
                            Create New
                        </button>
                    </div>
                </div>
            </div>

            <!-- Report Preview Section -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <h3 class="text-lg font-semibold text-[#23297f] mb-4">Report Preview</h3>
                <div class="h-96 bg-gray-50 rounded-lg flex items-center justify-center">
                    <!-- Add report preview content or PDF viewer here -->
                    <span class="text-gray-400">Report Preview Area</span>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#23297f] text-white py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex flex-col md:flex-row justify-center gap-8 mb-8">
                <a href="#" class="hover:text-blue-200 transition-colors">Audit Reports</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Tax Docs</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Export Docs</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Archives</a>
            </div>
            <p class="text-blue-200 text-sm">&copy; 2023 TradeFlow. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
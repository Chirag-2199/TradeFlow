<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeFlow - Welcome</title>
    
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

        @keyframes infinite-scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .animate-infinite-scroll {
            animation: infinite-scroll 30s linear infinite;
            display: flex;
            width: max-content;
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
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-300">Solutions</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-300">Features</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-300">Industries</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-300">Resources</a></li>
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-300">Pricing</a></li>
                    </ul>
                </nav>
            </div>
            <div class="flex items-center space-x-6">
                @guest
                    <a href="{{ route('login') }}" class="hover:text-blue-200 transition-colors duration-300">Login</a>
                    <a href="{{ route('register') }}" class="bg-white text-[#23297f] px-6 py-2 rounded-full font-semibold hover:bg-opacity-90 transition-all duration-300 shadow-lg">
                        Get Started
                    </a>
                @else
                    <a href="{{ route('dashboard') }}" class="hover:text-blue-200 transition-colors duration-300">Dashboard</a>
                @endguest
            </div>
        </div>
    </header>

    <section class="bg-gradient-to-b from-[#23297f] to-white pt-24 pb-32 text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-5xl font-bold text-white mb-6 leading-tight">
                Transform Your Business Operations with 
                <span class="bg-white text-[#23297f] px-4 rounded-xl inline-block mt-2">TradeFlow</span>
            </h1>
            <p class="text-xl text-blue-100 mb-8">
                Intelligent CRM/ERP solutions for modern enterprises
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-5">
                <button class="bg-white text-[#23297f] px-8 py-4 rounded-full text-lg font-semibold hover:scale-105 transition-transform duration-300 shadow-2xl">
                    Start Free Trial
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-full text-lg hover:bg-white hover:text-[#23297f] transition-colors duration-300">
                    Watch Demo
                </button>
            </div>
        </div>
    </section>

    <section class="relative bg-white py-20">
        <div class="absolute inset-0 flex items-center justify-center overflow-hidden">
            <div class="w-full bg-gradient-to-r from-transparent via-[#23297f] to-transparent h-1 animate-line-scroll"></div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-[#23297f] text-center mb-4">Key Features</h2>
            <p class="text-gray-600 text-center mb-16">Powerful tools for business optimization</p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-[#23297f]/10 rounded-xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-[#23297f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#23297f] mb-4">Real-time Analytics</h3>
                    <p class="text-gray-600">Comprehensive business insights with live data visualization</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-[#23297f]/10 rounded-xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-[#23297f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0H3m14 0h2m-2 0h2m-14 0H3"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#23297f] mb-4">Inventory Management</h3>
                    <p class="text-gray-600">End-to-end supply chain optimization and tracking</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="w-14 h-14 bg-[#23297f]/10 rounded-xl mb-6 flex items-center justify-center">
                        <svg class="w-8 h-8 text-[#23297f]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#23297f] mb-4">Financial Tracking</h3>
                    <p class="text-gray-600">Integrated accounting and financial reporting</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Infinite Logo Carousel -->
    <section class="py-16 bg-white overflow-hidden">
        <div class="relative w-full">
            <div class="flex animate-infinite-scroll">
                <!-- Duplicate the image set for seamless looping -->
                <div class="flex space-x-16 px-4 items-center">
                    <!-- Client Logos - Update these with your actual logos -->
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732228.png" alt="Client logo" class="h-48 opacity-70 hover:opacity-100 transition-opacity">
                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968292.png" alt="Client logo" class="h-48 opacity-70 hover:opacity-100 transition-opacity">
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732221.png" alt="Client logo" class="h-48 opacity-70 hover:opacity-100 transition-opacity">
                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968242.png" alt="Client logo" class="h-48 opacity-70 hover:opacity-100 transition-opacity">
                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968322.png" alt="Client logo" class="h-48 opacity-70 hover:opacity-100 transition-opacity">
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732190.png" alt="Client logo" class="h-48 opacity-70 hover:opacity-100 transition-opacity">
                    <!-- Duplicate the first set -->
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732228.png" alt="Client logo" class="h-48 opacity-70 hover:opacity-100 transition-opacity">
                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968292.png" alt="Client logo" class="h-48 opacity-70 hover:opacity-100 transition-opacity">
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732221.png" alt="Client logo" class="h-48 opacity-70 hover:opacity-100 transition-opacity">
                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968242.png" alt="Client logo" class="h-48 opacity-70 hover:opacity-100 transition-opacity">
                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968322.png" alt="Client logo" class="h-48 opacity-70 hover:opacity-100 transition-opacity">
                    <img src="https://cdn-icons-png.flaticon.com/512/732/732190.png" alt="Client logo" class="h-48 opacity-70 hover:opacity-100 transition-opacity">
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#23297f] text-white py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex flex-col md:flex-row justify-center gap-8 mb-8">
                <a href="#" class="hover:text-blue-200 transition-colors">About</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Careers</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Contact</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Privacy</a>
            </div>
            <p class="text-blue-200 text-sm">&copy; 2023 TradeFlow. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
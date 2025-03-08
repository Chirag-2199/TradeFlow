<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeFlow - Register</title>
    
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
            </div>
            <div class="flex items-center space-x-6">
                <a href="{{ route('login') }}" class="hover:text-blue-200 transition-colors duration-300">Login</a>
                <a href="{{ route('register') }}" class="bg-white text-[#23297f] px-6 py-2 rounded-full font-semibold hover:bg-opacity-90 transition-all duration-300 shadow-lg">
                    Get Started
                </a>
            </div>
        </div>
    </header>

    <section class="bg-gradient-to-b from-[#23297f] to-white pt-24 pb-32 min-h-screen">
        <div class="max-w-md mx-auto px-4">
            <div class="bg-white rounded-2xl shadow-xl px-8 py-10">
                <h2 class="text-3xl font-bold text-[#23297f] text-center mb-8">Create Account</h2>
                
                <form method="POST" action="{{ route('register.submit') }}" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <input type="text" name="name" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#23297f] focus:border-[#23297f] transition-all">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input type="email" name="email" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#23297f] focus:border-[#23297f] transition-all">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input type="password" name="password" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#23297f] focus:border-[#23297f] transition-all">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                        <input type="password" name="password_confirmation" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#23297f] focus:border-[#23297f] transition-all">
                    </div>

                    <button type="submit" 
                            class="w-full bg-[#23297f] text-white py-3 px-6 rounded-lg font-semibold hover:bg-[#1a1f5f] transition-colors duration-300 shadow-lg">
                        Register Now
                    </button>
                </form>

                <p class="mt-8 text-center text-gray-600">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-[#23297f] font-semibold hover:underline">Sign in</a>
                </p>
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
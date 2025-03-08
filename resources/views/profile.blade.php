<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeFlow - Profile</title>
    
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
                        <li><a href="{{ route('profile.show') }}" class="hover:text-blue-200 transition-colors duration-300 font-semibold">Profile</a></li>
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
                <h1 class="text-4xl font-bold text-[#23297f] mb-8">Account Settings</h1>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Name -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#23297f] focus:border-[#23297f] transition-all">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#23297f] focus:border-[#23297f] transition-all">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">New Password</label>
                            <input type="password" name="password" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#23297f] focus:border-[#23297f] transition-all"
                                   placeholder="Leave blank to keep current password">
                            @error('password')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                            <input type="password" name="password_confirmation" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#23297f] focus:border-[#23297f] transition-all">
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="submit" 
                                class="bg-[#23297f] text-white px-8 py-4 rounded-lg font-semibold hover:bg-[#1a1f5f] transition-colors duration-300 shadow-lg">
                            Update Profile
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="bg-[#23297f] text-white py-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex flex-col md:flex-row justify-center gap-8 mb-8">
                <a href="#" class="hover:text-blue-200 transition-colors">Security</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Privacy</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Account Settings</a>
                <a href="#" class="hover:text-blue-200 transition-colors">Help</a>
            </div>
            <p class="text-blue-200 text-sm">&copy; 2023 TradeFlow. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
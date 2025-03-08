<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradeFlow - Settings</title>
    
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
                        <li><a href="#" class="hover:text-blue-200 transition-colors duration-300 font-semibold">Settings</a></li>
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

                <form method="POST" action="#">
                    @csrf
                    @method('PUT')

                    <!-- Timezone -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Timezone</label>
                        <select name="timezone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#23297f] focus:border-[#23297f] transition-all">
                            <option value="UTC" {{ Auth::user()->timezone === 'UTC' ? 'selected' : '' }}>UTC</option>
                            <option value="America/New_York" {{ Auth::user()->timezone === 'America/New_York' ? 'selected' : '' }}>New York (EST)</option>
                            <option value="Europe/London" {{ Auth::user()->timezone === 'Europe/London' ? 'selected' : '' }}>London (GMT)</option>
                            <!-- Add more timezones as needed -->
                        </select>
                    </div>

                    <!-- Notification Preferences -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Notification Preferences</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" name="notification_preferences[]" value="email" class="rounded border-gray-300 text-[#23297f] focus:ring-[#23297f]">
                                <span class="ml-2">Email Notifications</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="notification_preferences[]" value="sms" class="rounded border-gray-300 text-[#23297f] focus:ring-[#23297f]">
                                <span class="ml-2">SMS Notifications</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="notification_preferences[]" value="push" class="rounded border-gray-300 text-[#23297f] focus:ring-[#23297f]">
                                <span class="ml-2">Push Notifications</span>
                            </label>
                        </div>
                    </div>

                    <!-- Language -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Language</label>
                        <select name="language" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#23297f] focus:border-[#23297f] transition-all">
                            <option value="en" {{ Auth::user()->language === 'en' ? 'selected' : '' }}>English</option>
                            <option value="es" {{ Auth::user()->language === 'es' ? 'selected' : '' }}>Spanish</option>
                            <option value="fr" {{ Auth::user()->language === 'fr' ? 'selected' : '' }}>French</option>
                            <!-- Add more languages as needed -->
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-8">
                        <button type="submit" class="bg-[#23297f] text-white px-8 py-4 rounded-lg font-semibold hover:bg-[#1a1f5f] transition-colors duration-300 shadow-lg">
                            Save Settings
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
                <a href="#" class="hover:text-blue-200 transition-colors">Help</a>
            </div>
            <p class="text-blue-200 text-sm">&copy; 2023 TradeFlow. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
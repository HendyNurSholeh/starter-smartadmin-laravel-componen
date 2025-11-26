@props(['brand' => 'MyApp'])

<nav class="bg-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo/Brand -->
            <div class="flex items-center space-x-4">
                <a href="/" class="text-2xl font-bold text-blue-600 hover:text-blue-700">
                    {{ $brand }}
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="/" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                <a href="/about" class="text-gray-700 hover:text-blue-600 transition">About</a>
                <a href="/services" class="text-gray-700 hover:text-blue-600 transition">Services</a>
                <a href="/contact" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
            </div>

            <!-- Right Side Buttons -->
            <div class="hidden md:flex items-center space-x-3">
                <x-button variant="outline" size="sm">Login</x-button>
                <x-button variant="primary" size="sm">Sign Up</x-button>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

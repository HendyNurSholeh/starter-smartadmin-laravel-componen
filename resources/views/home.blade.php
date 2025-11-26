<x-layout title="Dashboard - Laravel Components">

    <!-- Hero Section -->
    <div class="mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Welcome to Laravel Components</h1>
        <p class="text-gray-600">Contoh penggunaan Blade Component sesuai best practice Laravel</p>
    </div>

    <!-- Alert Examples -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Alert Components</h2>
        
        <x-alert type="success" message="Berhasil login! Selamat datang kembali." />
        <x-alert type="error" message="Terjadi kesalahan! Silakan coba lagi." />
        <x-alert type="warning" message="Perhatian! Data Anda belum tersimpan." />
        <x-alert type="info" message="Informasi: Sistem akan maintenance pada Minggu, 27 Nov 2025." />
    </div>

    <!-- Button Examples -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Button Components</h2>
        
        <div class="flex flex-wrap gap-3">
            <x-button variant="primary">Primary Button</x-button>
            <x-button variant="secondary">Secondary Button</x-button>
            <x-button variant="success">Success Button</x-button>
            <x-button variant="danger">Danger Button</x-button>
            <x-button variant="warning">Warning Button</x-button>
            <x-button variant="outline">Outline Button</x-button>
        </div>

        <div class="mt-4 flex flex-wrap gap-3">
            <x-button variant="primary" size="sm">Small</x-button>
            <x-button variant="primary" size="md">Medium</x-button>
            <x-button variant="primary" size="lg">Large</x-button>
        </div>
    </div>

    <!-- Card Examples -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Card Components</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <x-card title="Card dengan Title">
                <p class="text-gray-600">
                    Ini adalah contoh card component dengan title. 
                    Sangat cocok untuk menampilkan informasi terstruktur.
                </p>
                <div class="mt-4">
                    <x-button variant="primary" size="sm">Read More</x-button>
                </div>
            </x-card>

            <x-card title="Card dengan Footer" footer="Updated 2 hours ago">
                <p class="text-gray-600">
                    Card ini memiliki footer untuk menampilkan informasi tambahan 
                    seperti tanggal update atau metadata lainnya.
                </p>
            </x-card>

            <x-card>
                <h4 class="font-bold text-lg mb-2">Card Tanpa Title</h4>
                <p class="text-gray-600">
                    Card ini tidak memiliki title bawaan, jadi kontennya 
                    lebih fleksibel dan customizable.
                </p>
            </x-card>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Statistics Dashboard</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <x-card class="bg-gradient-to-br from-blue-500 to-blue-600 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-100 text-sm">Total Users</p>
                        <h3 class="text-3xl font-bold mt-1">1,234</h3>
                    </div>
                    <div class="text-blue-200">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                        </svg>
                    </div>
                </div>
            </x-card>

            <x-card class="bg-gradient-to-br from-green-500 to-green-600 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-100 text-sm">Revenue</p>
                        <h3 class="text-3xl font-bold mt-1">$45.2K</h3>
                    </div>
                    <div class="text-green-200">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </x-card>

            <x-card class="bg-gradient-to-br from-purple-500 to-purple-600 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-100 text-sm">Orders</p>
                        <h3 class="text-3xl font-bold mt-1">567</h3>
                    </div>
                    <div class="text-purple-200">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                        </svg>
                    </div>
                </div>
            </x-card>

            <x-card class="bg-gradient-to-br from-orange-500 to-orange-600 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-orange-100 text-sm">Products</p>
                        <h3 class="text-3xl font-bold mt-1">89</h3>
                    </div>
                    <div class="text-orange-200">
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                </div>
            </x-card>
        </div>
    </div>

    <!-- Info Section -->
    <x-card title="Best Practice Laravel Components" class="bg-blue-50 border-2 border-blue-200">
        <div class="space-y-3">
            <p class="text-gray-700">
                ✅ <strong>Reusable:</strong> Component bisa digunakan berkali-kali di berbagai tempat
            </p>
            <p class="text-gray-700">
                ✅ <strong>Maintainable:</strong> Mudah di-update karena terpusat di satu tempat
            </p>
            <p class="text-gray-700">
                ✅ <strong>Type-safe:</strong> Menggunakan PHP class dengan type hints
            </p>
            <p class="text-gray-700">
                ✅ <strong>Flexible:</strong> Mendukung props, slots, dan attributes
            </p>
        </div>
    </x-card>

</x-layout>

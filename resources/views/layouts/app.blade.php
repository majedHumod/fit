

<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'نظام إدارة الأندية الرياضية') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Styles -->
    @livewireStyles
</head>
<body class="bg-gray-50 font-sans antialiased">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ route('home') }}" class="text-2xl font-bold text-indigo-600">
                                <i class="fas fa-dumbbell ml-2"></i>
                                نادي الرياضة
                            </a>
                        </div>
                        <div class="hidden sm:mr-6 sm:flex sm:space-x-8 sm:space-x-reverse">
                            <a href="{{ route('home') }}" class="inline-flex items-center px-1 pt-1 {{ request()->routeIs('home') ? 'text-gray-900 border-b-2 border-indigo-500' : 'text-gray-500 hover:text-gray-900' }} text-sm font-medium">
                                <i class="fas fa-home ml-1"></i>
                                الرئيسية
                            </a>
                            <a href="{{ route('clubs.index') }}" class="inline-flex items-center px-1 pt-1 {{ request()->routeIs('clubs.index') ? 'text-gray-900 border-b-2 border-indigo-500' : 'text-gray-500 hover:text-gray-900' }} text-sm font-medium">
                                <i class="fas fa-building ml-1"></i>
                                الأندية
                            </a>
                            <a href="{{ route('clubs.map') }}" class="inline-flex items-center px-1 pt-1 {{ request()->routeIs('clubs.map') ? 'text-gray-900 border-b-2 border-indigo-500' : 'text-gray-500 hover:text-gray-900' }} text-sm font-medium">
                                <i class="fas fa-map-marker-alt ml-1"></i>
                                خريطة الأندية
                            </a>
                        </div>
                    </div>
                    
                    <!-- إضافة روابط تسجيل الدخول ولوحة التحكم -->
                    <div class="flex items-center">
                        @auth
                            <!-- قائمة المستخدم المسجل دخوله -->
                            <div class="relative">
                                <x-dropdown align="left" width="48">
                                    <x-slot name="trigger">
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <div>{{ Auth::user()->name }}</div>

                                            <div class="mr-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('dashboard')">
                                            <i class="fas fa-tachometer-alt ml-1"></i>
                                            لوحة التحكم
                                        </x-dropdown-link>

                                        <x-dropdown-link :href="route('profile')">
                                            <i class="fas fa-user-edit ml-1"></i>
                                            الملف الشخصي
                                        </x-dropdown-link>

                                        <!-- تسجيل الخروج -->
                                         <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                            <x-dropdown-link>
                                <i class="fas fa-sign-out-alt ml-1"></i>
                                {{ __('تسجيل الخروج') }}
                            </x-dropdown-link>
                        </button>
                                    
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        @else
                            <!-- روابط تسجيل الدخول والتسجيل للزوار -->
                            <a href="{{ route('login') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-3">
                                <i class="fas fa-sign-in-alt ml-1"></i>
                                تسجيل الدخول
                            </a>
                            <a href="{{ route('register') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <i class="fas fa-user-plus ml-1"></i>
                                إنشاء حساب
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">عن النظام</h3>
                        <p class="text-gray-400">
                            نظام متكامل لإدارة الأندية الرياضية وعرض خدماتها للمستفيدين
                        </p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">روابط سريعة</h3>
                        <ul class="space-y-2">
                            <li>
                                <a href="{{ route('home') }}" class="text-gray-400 hover:text-white">
                                    <i class="fas fa-home ml-1"></i>
                                    الرئيسية
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('clubs.index') }}" class="text-gray-400 hover:text-white">
                                    <i class="fas fa-building ml-1"></i>
                                    الأندية
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('clubs.map') }}" class="text-gray-400 hover:text-white">
                                    <i class="fas fa-map-marker-alt ml-1"></i>
                                    خريطة الأندية
                                </a>
                            </li>
                            @auth
                                <li>
                                    <a href="{{ route('dashboard') }}" class="text-gray-400 hover:text-white">
                                        <i class="fas fa-tachometer-alt ml-1"></i>
                                        لوحة التحكم
                                    </a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">تواصل معنا</h3>
                        <ul class="space-y-2 text-gray-400">
                            <li><i class="fas fa-envelope ml-2"></i> البريد الإلكتروني: info@sports-clubs.com</li>
                            <li><i class="fas fa-phone ml-2"></i> الهاتف: +966 50 000 0000</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-gray-800 text-center text-gray-400">
                    <p>&copy; {{ date('Y') }} نظام إدارة الأندية الرياضية. جميع الحقوق محفوظة</p>
                </div>
            </div>
        </footer>
    </div>
    
    @livewireScripts
</body>
</html>
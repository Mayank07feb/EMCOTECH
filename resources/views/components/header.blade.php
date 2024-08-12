<!--NAVBAR START-->
<nav class="bg-gray-300 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo and Branding -->
        <div class="logo flex items-center px-4">
            <a href="{{ route('home') }}">
                <img src="{{ asset('asset/images/logo 2 png.png') }}" alt="Logo" class="h-20">
            </a>
        </div>

        <!-- Mobile Menu Toggle -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-black focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-4 items-center">
            <a href="{{ route('home') }}"
                class="text-black font-bold {{ request()->routeIs('home') ? 'text-red-500 underline' : 'hover:text-red-500 hover:underline' }}">
                Home
            </a>
            <a href="{{ route('about') }}"
                class="text-black font-bold {{ request()->routeIs('about') ? 'text-red-500 underline' : 'hover:text-red-500 hover:underline' }}">
                About
            </a>
            <a href="{{ route('services') }}"
                class="text-black font-bold {{ request()->routeIs('services') ? 'text-red-500 underline' : 'hover:text-red-500 hover:underline' }}">
                Services
            </a>
            <a href="{{ route('products') }}"
                class="text-black font-bold {{ request()->routeIs('products') ? 'text-red-500 underline' : 'hover:text-red-500 hover:underline' }}">
                Products
            </a>
            <a href="{{ route('blogs') }}"
                class="text-black font-bold {{ request()->routeIs('blogs') ? 'text-red-500 underline' : 'hover:text-red-500 hover:underline' }}">
                Blog
            </a>
            <a href="{{ route('team') }}"
                class="text-black font-bold {{ request()->routeIs('team') ? 'text-red-500 underline' : 'hover:text-red-500 hover:underline' }}">
                Team
            </a>
            <a href="{{ route('contact') }}"
                class="text-black font-bold {{ request()->routeIs('contact') ? 'text-red-500 underline' : 'hover:text-red-500 hover:underline' }}">
                Contact
            </a>
        </div>
    </div>

    <!-- Mobile Menu (Initially Hidden) -->
    <div id="mobile-menu" class="hidden md:hidden bg-gray-400">
        <a href="{{ route('home') }}"
           class="block px-4 py-2 text-black font-bold {{ request()->routeIs('home') ? 'text-red-500' : 'hover:text-red-500' }}">
           Home
        </a>
        <a href="{{ route('about') }}"
           class="block px-4 py-2 text-black font-bold {{ request()->routeIs('about') ? 'text-red-500' : 'hover:text-red-500' }}">
           About
        </a>
        <a href="{{ route('services') }}"
           class="block px-4 py-2 text-black font-bold {{ request()->routeIs('services') ? 'text-red-500' : 'hover:text-red-500' }}">
           Services
        </a>
        <a href="{{ route('products') }}"
           class="block px-4 py-2 text-black font-bold {{ request()->routeIs('products') ? 'text-red-500' : 'hover:text-red-500' }}">
           Products
        </a>
        <a href="{{ route('blogs') }}"
           class="block px-4 py-2 text-black font-bold {{ request()->routeIs('blogs') ? 'text-red-500' : 'hover:text-red-500' }}">
           Blog
        </a>
        <a href="{{ route('team') }}"
           class="block px-4 py-2 text-black font-bold {{ request()->routeIs('team') ? 'text-red-500' : 'hover:text-red-500' }}">
           Team
        </a>
        <a href="{{ route('contact') }}"
           class="block px-4 py-2 text-black font-bold {{ request()->routeIs('contact') ? 'text-red-500' : 'hover:text-red-500' }}">
           Contact
        </a>
    </div>
</nav>
<!--NAVBAR END-->

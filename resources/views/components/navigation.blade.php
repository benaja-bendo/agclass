<header class="bg-white border-b border-gray-100">
    <nav x-data="{ open: false }" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Primary Navigation Menu -->
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        {{-- <x-application-logo class="block h-10 w-auto fill-current text-gray-600" /> --}}
                        <img src="{{ asset('assets/images/logo.png') }}" alt="agclass" class="block h-10 w-auto fill-current text-gray-600">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        Accueil
                    </x-nav-link>
                    <x-nav-link :href="route('formation.index')" :active="request()->routeIs('formation.index')">
                        formation
                    </x-nav-link>
                    <x-nav-link :href="route('catalogue.index')" :active="request()->routeIs('catalogue.index')">
                        catalogue
                    </x-nav-link>
                    <x-nav-link :href="route('astuces.index')" :active="request()->routeIs('astuces.index')">
                        astuces
                    </x-nav-link>
                    <x-nav-link :href="route('ebooks.index')" :active="request()->routeIs('ebooks.index')">
                        ebooks
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @if (Route::has('login'))
                @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="{{ route("profil.index") }}">
                            mon profil
                        </a>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                {{ __('Déconnexion') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @else
                <div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                    <a href="{{ route('login') }}" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto">
                        se connecter
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white bg-indigo-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-indigo-600">
                        s'inscrire
                    </a>
                    @endif
                </div>
                @endauth
                @endif
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    Accueil
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('formation.index')" :active="request()->routeIs('formation.index')">
                    formation
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('catalogue.index')" :active="request()->routeIs('catalogue.index')">
                    catalogue
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('astuces.index')" :active="request()->routeIs('astuces.index')">
                    astuces
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('ebooks.index')" :active="request()->routeIs('ebooks.index')">
                    ebooks
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                @if (Route::has('login'))
                @auth
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
                <div class="mt-3 space-y-1">
                    <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="{{ route("profil.index") }}">
                        mon profil
                    </a>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            Déconnexion
                        </x-responsive-nav-link>
                    </form>
                </div>
                @else
                <div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                    <a href="{{ route('login') }}" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto">
                        se connecter
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white bg-indigo-600 md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-indigo-500 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-indigo-600">
                        s'inscrire
                    </a>
                    @endif
                </div>
                @endauth
                @endif
            </div>
        </div>
    </nav>
</header>

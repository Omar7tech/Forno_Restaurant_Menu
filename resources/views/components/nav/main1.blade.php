@props(['settings'])
@php
    $theme = $settings->theme;
@endphp
<nav class="sticky top-0 z-100 navbar bg-base-100 shadow-sm">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>

            <ul tabindex="0"
                class="menu dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-64 p-2 shadow-xl border border-base-200">

                <li>
                    <a wire:navigate href="{{ route('home') }}"
                        class="flex items-center gap-3 p-3 rounded-lg transition-all duration-300
           {{ Route::is('home') ? 'bg-cyan-600 text-white shadow-md' : 'hover:bg-cyan-600/20 hover:text-cyan-600 focus:bg-cyan-600/30 focus:text-white focus:outline-none' }}">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="font-semibold">Menu</div>
                            <div class="text-xs opacity-70">Browse our dishes</div>
                        </div>
                        @if (Route::is('home'))
                            <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                        @endif
                    </a>
                </li>

                <li>
                    <a wire:navigate href="{{ route('about') }}"
                        class="flex items-center gap-3 p-3 rounded-lg transition-all duration-300
           {{ Route::is('about') ? 'bg-cyan-600 text-white shadow-md' : 'hover:bg-cyan-600/20 hover:text-cyan-600 focus:bg-cyan-600/30 focus:text-white focus:outline-none' }}">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="font-semibold">About</div>
                            <div class="text-xs opacity-70">Our story</div>
                        </div>
                        @if (Route::is('about'))
                            <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                        @endif
                    </a>
                </li>

                <li>
                    <a wire:navigate href="{{ route('contact') }}"
                        class="flex items-center gap-3 p-3 rounded-lg transition-all duration-300
           {{ Route::is('contact') ? 'bg-cyan-600 text-white shadow-md' : 'hover:bg-cyan-600/20 hover:text-cyan-600 focus:bg-cyan-600/30 focus:text-white focus:outline-none' }}">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="flex-1">
                            <div class="font-semibold">Contact</div>
                            <div class="text-xs opacity-70">Get in touch</div>
                        </div>
                        @if (Route::is('contact'))
                            <div class="w-2 h-2 bg-white rounded-full animate-pulse"></div>
                        @endif
                    </a>
                </li>
            </ul>

        </div>
    </div>

    <!-- Logo -->
    <div class="navbar-center">
        <a>
            @if ($theme === 'light')
                <img src="{{ asset('images/title-nobg.png') }}" alt=""
                    class="w-15 animate-fade-down animate-once animate-ease-linear">
            @else
                <img src="{{ asset('images/logo-white-nobg.png') }}" alt=""
                    class="w-15 animate-fade-down animate-once animate-ease-linear">
            @endif
        </a>
    </div>

    <!-- Actions -->
    <div class="navbar-end">
        @if ($settings->whatsapp_active && $settings->whatsapp_number && $settings->whatsapp_number_on_top)
            <a href="https://wa.me/{{ $settings->whatsapp_number }}?text=👋%20Hello%20Forno,%20I%20would%20like%20to%20place%20an%20order!"
                target="_blank">
                <img src="{{ asset('icons/whatsapp-icon.png') }}" alt="WhatsApp" class="w-10">
            </a>
        @endif

    </div>
</nav>

<footer class="bg-gradient-to-br from-base-200 to-base-300 border-t border-base-300" itemscope itemtype="https://schema.org/Restaurant">
    <div class="footer footer-center lg:footer-horizontal max-w-7xl mx-auto p-10 lg:px-16">
        <aside class="flex flex-col lg:flex-row items-center gap-6 lg:gap-8">
            <div class="relative group">
                <div class="absolute inset-0 bg-primary/20 rounded-full blur-xl group-hover:blur-2xl transition-all duration-500 opacity-0 group-hover:opacity-100"></div>
                <img src="{{ asset('images/cropped_circle_image.png') }}" alt="Forno Flat Bread Logo"
                    class="w-24 lg:w-28 rounded-full transition-all duration-700 opacity-0 scale-75
                        shadow-[0_0_0px_0px_rgba(0,150,255,0)]
                        animate-glow-on-scroll relative z-10
                        ring-4 ring-base-100 hover:ring-primary/50 hover:scale-105"
                    itemprop="logo" />
            </div>
            <div class="text-center lg:text-left space-y-2">
                <p>
                    <span class="font-bold text-2xl bg-gradient-to-r from-cyan-600 to-gray-500 bg-clip-text text-transparent" itemprop="name">
                        Forno Flat Bread
                    </span>
                    <br />
                    <span class="text-base-content/70 text-sm lg:text-base mt-1 inline-block" itemprop="description">
                        Mediterranean Italian Restaurant in Aley, Lebanon
                    </span>
                </p>
                <p class="sr-only" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                    <span itemprop="addressLocality">Aley</span>,
                    <span itemprop="addressCountry">Lebanon</span>
                </p>
            </div>
        </aside>
    </div>
    <div class="divider max-w-7xl mx-auto px-10 lg:px-16 my-0"></div>
    <div class="bg-base-300/30">
        <div class="max-w-7xl mx-auto px-10 lg:px-16 py-8">
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <div class="flex items-center gap-3">
                    <span class="text-sm text-base-content/60">Developed by</span>
                    <span class="font-semibold text-base-content">Omar Abi Farraj</span>
                </div>
                <div class="h-4 w-px bg-base-content/20 hidden sm:block"></div>
                <a href="tel:+96171387946" class="flex items-center gap-2 text-sm text-base-content/70 hover:text-info transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    +961 71 387 946
                </a>
            </div>
        </div>
    </div>
</footer>

<div>
    <div class="sticky top-0 z-50 navbar bg-base-100 shadow-sm">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a>Homepage</a></li>
                    <li><a>Portfolio</a></li>
                    <li><a>About</a></li>
                </ul>
            </div>
        </div>
        <div class="navbar-center">
            <a>
                <img src="{{ asset('images/title-nobg.png') }}" alt=""
                    class="w-15 animate-fade-down animate-once animate-ease-linear">
            </a>
        </div>
        <div class="navbar-end">
            <a href="">
                <img src="{{ asset('icons/whatsapp-icon.png') }}" alt="" class="w-10">
            </a>
        </div>
    </div>

    <x-hero.main2 />



    <div class="text-xl font-bold mt-10 flex items-center justify-between gap-2 px-2">
        <h1 class="raleway raleway-900 ms-6 bg-gradient-to-r from-slate-900 to-teal-700 bg-clip-text text-transparent">
            Categories
        </h1>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 text-gray-500">
            <path fill-rule="evenodd"
                d="M13.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L11.69 12 4.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                clip-rule="evenodd" />
            <path fill-rule="evenodd"
                d="M19.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06L17.69 12l-6.97-6.97a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                clip-rule="evenodd" />
        </svg>
    </div>
    <x-categories.main1 />

    <div class="mt-10">

        <x-category.header />
        <div class="px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <x-product.main />
                <x-product.main />
                <x-product.main />
                <x-product.main />
                <x-product.main />
                <x-product.main />
                <x-product.main />
            </div>
        </div>
        <x-category.header />
        <div class="px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <x-product.main />
                <x-product.main />
                <x-product.main />
                <x-product.main />
                <x-product.main />
                <x-product.main />
                <x-product.main />
            </div>
        </div>
    </div>

    <x-socials-bottom.main1 />

    <x-footer.main />

</div>

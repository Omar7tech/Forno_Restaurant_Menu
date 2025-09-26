<div class="sticky top-0 z-100 navbar bg-base-100 shadow-sm">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                <li><a>Homepage</a></li>
                <li><a>Portfolio</a></li>
                <li><a>About</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a>
           {{--  <img src="{{ asset('images/title-nobg.png') }}" alt=""
                class="w-15 animate-fade-down animate-once animate-ease-linear"> --}}
            <img src="{{ asset('images/logo-white-nobg.png') }}" alt=""
                class="w-15 animate-fade-down animate-once animate-ease-linear">
        </a>
    </div>
    <div class="navbar-end">
        <a href="">
            <img src="{{ asset('icons/whatsapp-icon.png') }}" alt="" class="w-10">
        </a>
    </div>
</div>

<nav class="bg-warna-01 lg:px-40 drop-shadow-lg flex justify-between items-center fixed w-screen z-50 h-12">
    <div class="flex flex-row justify-between items-center px-4 w-full h-full z-20">
        <a href="{{ url('') }}" class="h-full p-2">
            <img src="{{ asset('images/Logo Kryia-04.png') }}" class="h-full" alt="logo kriya indonesia">
        </a>
        <button type="button" class="p-2" onclick="navbar()" id="navbar_bar">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6 inline text-white lg:hidden">
                <path fill="currentcolor"
                    d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
            </svg>
        </button>
    </div>
    <div class="hidden lg:block" id="navbar-link">
        <div
            class="duration-1000 lg:translate-y-0 z-10 flex flex-col absolute top-10 left-0 lg:static lg:flex-row gap-2 lg:gap-4 lg:bg-transparent whitespace-nowrap bg-warna-01 w-screen lg:w-auto items-center">
            <a href="{{ url('') }}"
                class="{{ request()->is('/') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">Halaman
                Utama</a>
            <a href="{{ url('exhibitor_form') }}"
                class="{{ request()->is('exhibitor_form') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">Form
                Exhibitor</a>
            <a href="{{ url('exhibitor_list') }}"
                class="{{ request()->is('exhibitor_list') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">List
                Exhibitor</a>
            <a href="{{ url('contact') }}"
                class="{{ request()->is('contact') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">Hubungi
                Kami</a>
            <a href="{{ url('about') }}"
                class="{{ request()->is('about') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">Tentang</a>

            @if (auth()->check())
                @if (auth()->user()->role_id == 2)
                    <a href="{{ url('profile') }}"
                        class="rounded bg-white text-warna-01 my-2 px-6 py-2 text-sm">Profile</a>
                @else
                    <a href="{{ url('login') }}"
                        class="rounded bg-white text-warna-01 my-2 px-6 py-2 text-sm">Login</a>
                @endif
            @else
                <a href="{{ url('login') }}" class="rounded bg-white text-warna-01 my-2 px-6 py-2 text-sm">Login</a>
            @endif
        </div>
    </div>
</nav>

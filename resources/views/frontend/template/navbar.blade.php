<nav class="bg-warna-01 md:px-40 drop-shadow-lg flex justify-between items-center fixed w-screen z-50 h-12">
    <a href="{{ url('') }}" class="h-full p-2">
        <img src="{{ asset('images/Logo Kryia-04.png') }}" class="h-full" alt="logo kriya indonesia">
    </a>
    <div
        class="md:flex flex-col hidden absolute top-10 left-0 md:static md:flex-row gap-2 md:gap-4 md:bg-transparent bg-warna-01 w-screen md:w-auto items-center">
        <a href="{{ url('') }}"
            class="{{ request()->is('/') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">Home</a>
        {{-- <div class="cursor-pointer text-sky-100 hover:text-white my-2 px-4 text-sm relative">
            <span>Exhibitor</span>
            <div class="absolute bottom-0 translate-y-[110%] bg-warna-01 p-4 left-0 w-fit flex flex-col gap-4">
                <a href="{{ url('exhibitor_form') }}" class="block">Become Exhibitor</a>
                <a href="{{ url('exhibitor_list') }}" class="block">Exhibitor List</a>
            </div>
        </div> --}}
        <a href="{{ url('exhibitor_form') }}"
            class="{{ request()->is('exhibitor_form') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">Exhibitor</a>
        <a href="{{ url('exhibitor_list') }}"
            class="{{ request()->is('exhibitor_list') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">Exhibitor
            List</a>
        <a href="{{ url('about') }}"
            class="{{ request()->is('about') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">About</a>
        <a href="{{ url('login') }}" class="rounded bg-white text-warna-01 my-2 px-6 py-2 text-sm">Login</a>
    </div>
</nav>

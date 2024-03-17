<nav class="bg-warna-01 px-40 drop-shadow-lg flex justify-between items-center fixed w-full z-50 h-12">
    <img src="{{ asset('images/Logo Kryia-04.png') }}" class="h-full p-2" alt="logo kriya indonesia">
    <div class="flex flex-row gap-4">
        <a href="{{ url('') }}"
            class="{{ request()->is('/') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">Home</a>
        <a href="{{ url('exhibitor_form') }}"
            class="{{ request()->is('exhibitor_form') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">Exhibitor</a>
        <a href="{{ url('exhibitor_list') }}"
            class="{{ request()->is('exhibitor_list') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">Exhibitor
            List</a>
        <a href="{{ url('about') }}"
            class="{{ request()->is('about') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">About</a>
        <a href="{{ url('login') }}"
            class="{{ request()->is('login') ? 'font-bold text-white' : 'text-sky-100' }}  hover:text-white my-2 px-4 text-sm">Login</a>
    </div>
</nav>

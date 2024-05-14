@include('auth.template.header')
<div class="min-h-screen w-screen bg-cover flex flex-col  items-center px-4"
    style="background-image:url('{{ asset('images/Header Homepage-01.jpg') }}') ">

    <a href="{{ url('') }}"><img src="{{ asset('images/Logo Kryia-03.png') }}" alt="Logo Kriya Indonesia"
            class="w-auto h-40 mt-20"></a>

    <form action="{{ url('login') }}" method="POST" class="rounded w-full md:w-1/3 bg-white shadow-md p-4 my-10">
        @csrf
        <h1 class="text-3xl font-bold text-center text-warna-01 mb-4">Login</h1>
        @if (session('status'))
            <small class="text-green-700">{{ session('status') }}</small>
        @endif
        <div>
            <label for="email" class="mb-1 block">Email</label>
            <input type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="email" name="email">
        </div>
        <div>
            <label for="password" class="mb-1 block">Password</label>
            <input type="password"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="password" name="password">
        </div>
        <input type="hidden" name="role_id" value="1">

        @if (session('pesan_error'))
            <small class="text-red-700">Email atau password yang kamu masukan salah</small>
        @endif

        <button type="submit"
            class="px-4 py-2 text-white text-center mx-auto mt-4 rounded bg-warna-01 block w-1/2">Login</button>
        <a href="{{ url('forgot_password') }}" class="mt-4 text-warna-01 text-center block">Lupa Password?</a>
        <a href="{{ url('register') }}" class="mt-4 text-warna-01 text-center block">Belum punya akun?</a>
    </form>

</div>
@include('auth.template.footer')

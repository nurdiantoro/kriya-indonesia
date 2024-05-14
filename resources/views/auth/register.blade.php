@include('auth.template.header')

<div class="min-h-screen w-screen bg-cover flex flex-col  items-center px-4"
    style="background-image:url('{{ asset('images/Header Homepage-01.jpg') }}') ">

    <a href="{{ url('') }}"><img src="{{ asset('images/Logo Kryia-03.png') }}" alt="Logo Kriya Indonesia"
            class="w-auto h-40 mt-20"></a>

    <form action="{{ url('register') }}" method="POST"
        class="rounded w-full md:w-1/3 bg-white shadow-md p-4 my-10 flex flex-col gap-4">
        @csrf
        <h1 class="text-3xl font-bold text-center text-warna-01 mb-4">REGISTRASI</h1>
        <div>
            <label for="name" class="mb-1 block">Nama</label>
            <input required type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="name" name="name">
        </div>
        <div>
            <label for="email" class="mb-1 block">Email</label>
            <input required type="email"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="email" name="email">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <small class="text-red-700">Email yang kamu masukan sudah terdaftar</small>
                @endforeach
            @endif
        </div>
        <div>
            <label for="telp" class="mb-1 block">Nomor Telephone</label>
            <input required type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="telp" name="telp">
        </div>
        <div>
            <label for="password" class="mb-1 block">Password</label>
            <input required type="password"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="password" name="password">
        </div>
        <button type="submit"
            class="px-4 py-2 text-white text-center mx-auto mt-4 rounded bg-warna-01 block w-1/2">Daftar</button>
        <div class="mb-4 mx-auto">
            <a href="{{ url('login') }}" class="text-warna-01 text-center block">Sudah punya akun?</a>
        </div>
    </form>
</div>
@include('auth.template.footer')

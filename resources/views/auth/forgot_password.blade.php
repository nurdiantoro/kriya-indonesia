@include('auth.template.header')
<div class="min-h-screen w-screen bg-cover flex flex-col  items-center px-4"
    style="background-image:url('{{ asset('images/Header Homepage-01.jpg') }}') ">

    <a href="{{ url('') }}"><img src="{{ asset('images/Logo Kryia-03.png') }}" alt="Logo Kriya Indonesia"
            class="w-auto h-40 mt-20"></a>

    <form action="{{ url('forgot_password') }}" method="POST"
        class="rounded w-full md:w-1/3 bg-white shadow-md p-4 mt-10">
        @csrf
        <h1 class="text-3xl font-bold text-center text-warna-01 mb-4">Lupa Password</h1>
        <div>
            <label for="email" class="mb-1 block">Email</label>
            <input type="text" required
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="email" name="email">
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <span class="text-red-700 text-sm">Email tidak terdaftar</span>
            @endforeach
        @endif

        @if (session()->has('status'))
            <span class="text-green-700 text-sm">{{ session()->get('status') }}</span>
        @endif

        <input type="hidden" name="role_id" value="1">
        @if (session('pesan_error'))
            <small class="text-red-700">The email or password you used is incorrect</small>
        @endif
        <button type="submit"
            class="px-4 py-2 text-white text-center mx-auto mt-4 rounded bg-warna-01 block w-1/2">Submit</button>
    </form>

</div>
@include('auth.template.footer')

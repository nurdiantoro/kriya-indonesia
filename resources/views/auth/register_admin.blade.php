@include('auth.template.header')

@if ($errors->any())
    <div class="top-0 right-1/2 translate-x-1/2 p-4 fixed duration-1000" id="allert">
        <div class="bg-warna-04 shadow-md p-4 rounded-md border border-gray-300 flex flex-row items-center gap-2">
            <ul class="text-red-700">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button id="close_allert" class="ml-2">
                <svg class="inline w-4 h-6 text-gray-500" viewBox="0 0 384 512">
                    <path fill="currentcolor"
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>
        </div>
    </div>
@endif


<div class="h-screen w-screen bg-cover flex flex-col justify-center items-center px-4"
    style="background-image:url('{{ asset('images/Header Homepage-01.jpg') }}') ">
    <form action="{{ url('input_admin') }}" method="POST" class="rounded md:w-1/3 bg-white shadow-md p-4">
        @csrf
        <h1 class="text-3xl font-bold text-center text-warna-01 mb-4">REGISTER ADMIN</h1>
        <div>
            <label for="name" class="mb-1 block">Name</label>
            <input type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="name" name="name">
        </div>
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
        <button type="submit"
            class="px-4 py-2 text-white text-center mx-auto mt-4 rounded bg-warna-01 block w-1/2">Submit</button>
        <div class="mt-4 mx-auto">
            <a href="{{ url('login') }}" class="text-warna-01 text-center block">Sudah punya akun?</a>
        </div>
    </form>
</div>
@include('auth.template.footer')

@include('auth.template.header')
<div class="h-screen w-screen bg-cover flex flex-col justify-center items-center"
    style="background-image:url('{{ asset('images/Header Homepage-01.png') }}') ">
    <form action="{{ url('input_admin') }}" method="POST" class="rounded w-1/3 bg-white shadow-md p-4">
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

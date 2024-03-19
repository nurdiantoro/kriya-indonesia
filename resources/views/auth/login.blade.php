@include('auth.template.header')
<div class="h-screen w-screen bg-cover flex justify-center items-center"
    style="background-image:url('{{ asset('images/Header Homepage-01.png') }}') ">
    <form action="{{ url('login') }}" method="POST" class="rounded w-1/3 bg-white shadow-md p-4">
        @csrf
        <h1 class="text-3xl font-bold text-center text-warna-01 mb-4">Login</h1>
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
        <button type="submit"
            class="px-4 py-2 text-white text-center mx-auto mt-4 rounded bg-warna-01 block w-1/2">Submit</button>
    </form>
</div>
@include('auth.template.footer')

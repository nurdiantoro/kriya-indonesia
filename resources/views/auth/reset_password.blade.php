@include('auth.template.header')
<div class="min-h-screen w-screen bg-cover flex flex-col  items-center px-4"
    style="background-image:url('{{ asset('images/Header Homepage-01.jpg') }}') ">

    <a href="{{ url('') }}"><img src="{{ asset('images/Logo Kryia-03.png') }}" alt="Logo Kriya Indonesia"
            class="w-auto h-40 mt-20"></a>

    <form action="{{ url('update_password') }}" method="POST"
        class="rounded w-full md:w-1/3 bg-white shadow-md p-4 mt-10">
        @csrf
        <h1 class="text-3xl font-bold text-center text-warna-01 mb-4">Reset Your Password</h1>

        <div>
            <label for="password" class="mb-1 block">New Password</label>
            <input type="password" required
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="password" name="password">
        </div>
        <div>
            <label for="password_confirmation" class="mb-1 block">Confirm Password</label>
            <input type="password" required
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="password_confirmation" name="password_confirmation">
        </div>

        <input type="hidden" name="email" value="{{ request()->email }}">
        <input type="hidden" name="token" value="{{ request()->token }}">

        @if ($errors->any())
            <span class="text-red-700 text-sm">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </span>
        @endif

        @if (session()->has('status'))
            <span class="text-green-700 text-sm">{{ session()->get('status') }}</span>
        @endif
        <button type="submit"
            class="px-4 py-2 text-white text-center mx-auto mt-4 rounded bg-warna-01 block w-1/2">Submit</button>
    </form>

</div>
@include('auth.template.footer')

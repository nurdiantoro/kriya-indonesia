@include('frontend.template.header')

<div class="min-h-screen py-40 md:w-1/3 md:mx-auto flex flex-col">
    <h1 class="text-4xl font-bold text-center text-warna-01 mb-12">Ubah Password</h1>
    <div class="rounded-md shadow-md flex flex-col mx-4 overflow-hidden border-warna-01 border px-2 py-4">

        <form action="{{ url('profile/password') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            <div>
                <label for="password" class="mb-1 block">New Password</label>
                <input type="password"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="password" name="password">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <small class="text-red-700">{{ $error }}</small>
                    @endforeach
                @endif
            </div>
            <div>
                <label for="confirm_password" class="mb-1 block">Confirm Password</label>
                <input type="password"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="confirm_password" name="confirm_password">
            </div>
            <button type="submit"
                class="px-4 py-2 text-white text-center mx-auto mt-4 rounded bg-warna-01 block w-1/2">Submit</button>
        </form>
    </div>
</div>

@include('frontend.template.footer')

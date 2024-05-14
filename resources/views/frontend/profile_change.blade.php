@include('frontend.template.header')

<div class="min-h-screen py-40 md:w-1/3 md:mx-auto flex flex-col">
    <h1 class="text-4xl font-bold text-center text-warna-01 mb-12">Profile</h1>
    <div class="rounded-md shadow-md flex flex-col mx-4 overflow-hidden border-warna-01 border px-2 py-4">

        <form action="{{ url('profile/change') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            <div>
                <label for="name" class="mb-1 block">Name</label>
                <input type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="name" name="name" value="{{ $user->name }}">
            </div>
            <div>
                <label for="email" class="mb-1 block">Email</label>
                <input type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="email" name="email" value="{{ $user->email }}">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <small class="text-red-700">{{ $error }}</small>
                    @endforeach
                @endif
            </div>
            <div>
                <label for="telp" class="mb-1 block">Telephone Number</label>
                <input type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="telp" name="telp" value="{{ $user->telp }}">
            </div>
            <button type="submit"
                class="px-4 py-2 text-white text-center mx-auto mt-4 rounded bg-warna-01 block w-1/2">Submit</button>
            <div class=" mx-auto">
                <a href="{{ url('profile/password') }}" class="text-warna-01 text-center block">Change Password</a>
            </div>
        </form>
    </div>
</div>

@include('frontend.template.footer')

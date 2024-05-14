@include('backend.template.header')


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 font-bold">Profile</h1>
</div>


@if (session('pesan'))
    <div class="bottom-0 left-0 p-4 fixed duration-1000" id="allert">
        <div class="bg-warna-04 shadow-md p-2 rounded-md border border-green-300 flex flex-row items-center gap-2">
            <svg class="inline w-4 h-4 text-green-700" id="rounded check" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <path fill="currentcolor"
                    d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
            </svg>
            <span class="text-green-700">{{ session('pesan') }}</span>
            <button id="close_allert" class="ml-2" onclick="closeAlert()">
                <svg class="inline w-4 h-6 text-green-500" viewBox="0 0 384 512">
                    <path fill="currentcolor"
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>
        </div>
    </div>
@endif

<form method="POST" action="{{ url('dashboard/profile/update') }}">
    @csrf
    <div class="md:w-1/2 pb-20">
        <div class="border-[1px] rounded-md shadow-md px-2 py-2 bg-white overflow-hidden mb-2">
            <span class="text-xl font-bold text-gray-800">Data Profile</span>
            <table class="w-full">
                <tr>
                    <td class="w-20 md:w-60">Nama</td>
                    <td>:</td>
                    <td>
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <input class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1" type="text"
                            name="name" id="name" value="{{ $user->name }}">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <input class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1" type="email"
                            name="email" id="email" value="{{ $user->email }}">
                    </td>
                </tr>
                <tr>
                    <td>No Telephone</td>
                    <td>:</td>
                    <td>
                        <input class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1" type="text"
                            name="telp" id="telp" value="{{ $user->telp }}">
                    </td>
                </tr>
                <tr>
                    <td>qr_code</td>
                    <td>:</td>
                    <td>
                        <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                            name="qr_code" id="qr_code" value="{{ $user->qr_code }}">
                    </td>
                </tr>
            </table>
        </div>
        <div class="flex flex-row gap-4 justify-end w-full">
            <a href="{{ url('dashboard/profile/change') }}">
                <button class="btn btn-sm btn-outline-primary">Submit</button>
            </a>
        </div>
    </div>
</form>

@include('backend.template.footer')

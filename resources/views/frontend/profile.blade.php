@include('frontend.template.header')

<div class="min-h-screen py-40 md:w-1/3 md:mx-auto flex flex-col">
    <h1 class="text-4xl font-bold text-center text-warna-01 mb-12">Profile</h1>
    <div class="rounded-md shadow-md flex flex-col text-center mx-4 border-warna-01 border relative">

        @if (session()->has('pesan'))
            <div class="-top-10 left-0 right-0 absolute z-10 duration-1000 w-min mx-auto" id="allert">
                <div
                    class="bg-warna-04 shadow-md p-4 rounded-md border border-gray-300 flex flex-row items-center gap-2">
                    <svg class="inline w-4 h-4 text-green-700" id="rounded check" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512">
                        <path fill="currentcolor"
                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
                    </svg>
                    <span class="text-green-700 text-nowrap">Profile berhasil diubah!</span>
                    <button id="close_allert" class="ml-2" onclick="closeAlert()">
                        <svg class="inline w-4 h-6 text-gray-500" viewBox="0 0 384 512">
                            <path fill="currentcolor"
                                d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <div class="flex flex-col py-10">
            <span class="mx-auto mb-4">{!! DNS2D::getBarcodeHTML($user->qr_code, 'QRCODE') !!}</span>
            <span class="text-2xl">{{ $user->qr_code }}</span>
            <small class="text-gray-400">use this barcode for entrance ticket.</small>
        </div>
        <div class="border-t border-warna-01 py-10 flex flex-col gap-2 bg-gray-200">
            <h2 class="text-2xl text-warna-01">{{ $user->name }}</h2>
            <span class="text-gray-700">{{ $user->email }}</span>
            <span class="text-gray-700">{{ $user->telp }}</span>
            <a href="{{ url('profile/change') }}"
                class="bg-warna-01 rounded-md inline mx-auto px-4 py-2 text-white">Change
                Profile</a>
        </div>
    </div>
    <a href="{{ url('logout') }}"
        class="mt-10 bg-white border border-red-700 rounded-md mx-auto py-2 px-4 text-center text-red-700 hover:text-white hover:bg-red-700">Logout</a>
</div>

@include('frontend.template.footer')

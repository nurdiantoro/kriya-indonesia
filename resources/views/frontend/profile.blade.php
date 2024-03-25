@include('frontend.template.header')

<div class="min-h-screen py-40 md:w-1/3 md:mx-auto flex flex-col">
    <h1 class="text-4xl font-bold text-center text-warna-01 mb-12">Profile</h1>
    <div class="rounded-md shadow-md flex flex-col text-center mx-4 overflow-hidden border-warna-01 border">
        <div class="flex flex-col py-10">
            <span class="mx-auto mb-4">{!! DNS2D::getBarcodeHTML($user->qr_code, 'QRCODE') !!}</span>
            <span class="text-2xl">{{ $user->qr_code }}</span>
            <small class="text-gray-400">use this barcode for entrance ticket.</small>
        </div>
        <div class="border-t border-warna-01 py-10 flex flex-col gap-4 bg-gray-200">
            <h2 class="text-2xl text-warna-01">{{ $user->name }}</h2>
            <span class="text-gray-700">{{ $user->email }}</span>
            <a href="{{ url('profile/change') }}"
                class="bg-warna-01 rounded-md inline mx-auto px-4 py-2 text-white">Change
                Profile</a>
        </div>
    </div>
    <a href="{{ url('logout') }}"
        class="mt-10 bg-white border border-red-700 rounded-md mx-auto py-2 px-4 text-center text-red-700 hover:text-white hover:bg-red-700">Logout</a>
</div>

@include('frontend.template.footer')

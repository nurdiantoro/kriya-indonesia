@include('frontend.template.header')

<div class="py-40 px-4 md:px-40 min-h-screen">
    <h1 class="text-center font-bold text-4xl text-warna-01">Contact Us</h1>
    <p class="text-center md:w-1/2 block mx-auto">Untuk informasi dan pendaftaran dapat menghubungi alamat di bawah ini.
    </p>

    <div class="flex md:w-2/3 mx-auto flex-wrap justify-center">
        @foreach ($contacts as $contact)
            <div class="rounded border hover:border-warna-01 overflow-hidden shadow-md md:w-1/3">
                <div class="bg-warna-01 p-4 text-white ">
                    <span>{{ $contact->name }}</span>
                </div>
                <div class="bg-white p-4 flex flex-col">
                    <span>{{ $contact->email }}</span>
                    <span>{{ $contact->email2 }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('frontend.template.footer')

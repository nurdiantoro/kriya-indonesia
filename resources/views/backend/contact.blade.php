@include('backend.template.header')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 font-bold">Contact</h1>
    <div>
        <div class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
            data-target="#modalTambah">
            <i class="fas fa-plus text-white-50"></i> Tambah Contact
        </div>
    </div>
</div>

@if (session('pesan'))
    <div class="bottom-0 left-0 p-4 fixed duration-1000" id="allert">
        <div class="bg-warna-04 shadow-md p-2 rounded-md border border-gray-300 flex flex-row items-center gap-2">
            <svg class="inline w-4 h-4 text-gray-700" id="rounded check" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <path fill="currentcolor"
                    d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
            </svg>
            <span class="text-gray-700">{{ session('pesan') }}</span>
            <button id="close_allert" class="ml-2" onclick="closeAlert()">
                <svg class="inline w-4 h-6 text-gray-500" viewBox="0 0 384 512">
                    <path fill="currentcolor"
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>
        </div>
    </div>
@endif
@if ($errors->any())
    <div class="bottom-0 left-0 p-4 fixed duration-1000" id="allert">
        <div class="bg-warna-04 shadow-md p-2 rounded-md border border-gray-300 flex flex-row items-center gap-2">
            <svg class="inline w-4 h-4 text-red-700" id="rounded check" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <path fill="currentcolor"
                    d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zM224 352a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z" />
            </svg>
            <span class="text-red-700">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </span>
            <button id="close_allert" class="ml-2" onclick="closeAlert()">
                <svg class="inline w-4 h-6 text-gray-500" viewBox="0 0 384 512">
                    <path fill="currentcolor"
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>
        </div>
    </div>
@endif
{{-- Modal Tambah --}}
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ url('dashboard/contact/store/') }}" method="post" class="flex flex-col gap-4"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="foto">Foto</label>
                        <input type="file"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="foto" name="foto">
                    </div>
                    <div class="mb-3">
                        <label for="name">Nama</label>
                        <input type="text"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email 1</label>
                        <input type="email"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="email2">Email 2</label>
                        <input type="email2"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="email2" name="email2">
                    </div>
                    <div class="mb-3">
                        <label for="telp">Handphone</label>
                        <input type="telp"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="telp" name="telp">
                    </div>
                    <div class="mb-3">
                        <label for="urutan">Urutan</label>
                        <input type="text"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="urutan" name="urutan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="tombol-2" type="button" data-dismiss="modal">Cancel</button>
                    <button class="tombol-1" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal Edit --}}
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ url('dashboard/contact/update') }}" method="post" class="flex flex-col gap-4"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" id="edit_id" name="id">
                    <div class="mb-3">
                        <label for="foto">Foto</label>
                        <input type="file"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="foto" name="foto">
                        <input type="text" name="foto_lama" id="edit_foto_lama" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="edit_name">Nama</label>
                        <input type="text"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="edit_name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="edit_email">Email 1</label>
                        <input type="email"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="edit_email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="edit_email2">Email 2</label>
                        <input type="email2"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="edit_email2" name="email2">
                    </div>
                    <div class="mb-3">
                        <label for="edit_telp">Handphone (Gunakan +62)</label>
                        <input type="telp"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="edit_telp" name="telp">
                    </div>
                    <div class="mb-3">
                        <label for="edit_urutan">Urutan</label>
                        <input type="urutan"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="edit_urutan" name="urutan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="tombol-2" type="button" data-dismiss="modal">Cancel</button>
                    <button class="tombol-1" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal Delete --}}
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Contact</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ url('dashboard/contact/destroy/') }}" method="post" class="flex flex-col gap-4"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <span>Ingin Menghapus Contact</span>
                    <input type="hidden" id="delete_id" name="id">
                    <input type="text" disabled id="delete_name" name="name" value="">
                </div>
                <div class="modal-footer">
                    <button class="tombol-2" type="button" data-dismiss="modal">Cancel</button>
                    <button class="tombol-1" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Table --}}
<div class="flex flex-col gap-4">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <td>Urutan</td>
                <td>Foto</td>
                <td>Nama</td>
                <td>Email 1</td>
                <td>Email 2</td>
                <td>Handphone</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->urutan }}</td>
                    <td>
                        <img src="{{ asset('storage/images/contact/' . $contact->foto) }}" class="w-20 h-20"
                            alt="{{ $contact->foto }}">
                    </td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->email2 }}</td>
                    <td>{{ $contact->telp }}</td>
                    <td class="flex flex-row gap-2">
                        <button class="btn btn-primary btn-sm tombol_edit" id="tombol_edit" data-toggle="modal"
                            data-target="#modalEdit" data-id="{{ $contact->id }}"
                            data-urutan="{{ $contact->urutan }}" data-name="{{ $contact->name }}"
                            data-email="{{ $contact->email }}" data-email2="{{ $contact->email2 }}"
                            data-foto="{{ $contact->foto }}" data-telp="{{ $contact->telp }}">Edit</button>
                        <button class="btn btn-danger btn-sm tombol_delete" id="tombol_delete" data-toggle="modal"
                            data-target="#modalDelete" data-id="{{ $contact->id }}"
                            data-name="{{ $contact->name }}" data-foto="{{ $contact->foto }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('backend.template.footer')

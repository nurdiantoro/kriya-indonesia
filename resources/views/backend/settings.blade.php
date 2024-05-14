@include('backend.template.header')

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

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 font-bold">Settings</h1>
    <div>
        <div class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
            data-target="#modalTambah">
            <i class="fas fa-plus text-white-50"></i> Tambah Highlight
        </div>
    </div>
</div>

<div class="flex flex-col gap-4">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <td>Urutan</td>
                <td>Logo</td>
                <td>Perusahaan</td>
                <td>Website</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($highlights as $highlight)
                <tr>
                    <td>{{ $highlight->urutan }}</td>
                    <td><img src="{{ asset('storage/images/highlight/' . $highlight->logo) }}" class="h-20"></td>
                    <td>{{ $highlight->perusahaan }}</td>
                    <td>{{ $highlight->website }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm tombol_edit_highlight" id="tombol_edit_highlight"
                            data-toggle="modal" data-target="#modalEdit" data-id="{{ $highlight->id }}"
                            data-logo="{{ $highlight->logo }}" data-perusahaan="{{ $highlight->perusahaan }}"
                            data-website="{{ $highlight->website }}"
                            data-urutan="{{ $highlight->urutan }}">Edit</button>
                        <button class="btn btn-danger btn-sm tombol_delete_highlight" id="tombol_delete_highlight"
                            data-toggle="modal" data-target="#modalDelete" data-id="{{ $highlight->id }}"
                            data-logo="{{ $highlight->logo }}"
                            data-perusahaan="{{ $highlight->perusahaan }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- Modal Tambah --}}
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Highlight</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ url('dashboard/highlight/store/') }}" method="post" class="flex flex-col gap-4"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="logo">logo</label>
                        <input type="file"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="logo" name="logo">
                    </div>
                    <div class="mb-3">
                        <label for="perusahaan">Nama Perusahaan</label>
                        <input type="perusahaan"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="perusahaan" name="perusahaan">
                    </div>
                    <div class="mb-3">
                        <label for="website">Website</label>
                        <input type="text"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="website" name="website">
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
                <h5 class="modal-title" id="exampleModalLabel">Edit Highlight</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ url('dashboard/highlight/update/') }}" method="post" class="flex flex-col gap-4"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="id" id="edit_id">
                    <input type="hidden" name="logo_lama" id="edit_logo_lama">
                    <div class="mb-3">
                        <label for="logo">logo</label>
                        <input type="file"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="logo" name="logo">
                    </div>
                    <div class="mb-3">
                        <label for="perusahaan">Nama Perusahaan</label>
                        <input type="perusahaan"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="edit_perusahaan" name="perusahaan">
                    </div>
                    <div class="mb-3">
                        <label for="website">Website</label>
                        <input type="text"
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="edit_website" name="website">
                    </div>
                    <div class="mb-3">
                        <label for="urutan">Urutan</label>
                        <input type="text"
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
                <h5 class="modal-title" id="exampleModalLabel">Delete Highlight</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ url('dashboard/highlight/destroy/') }}" method="post" class="flex flex-col gap-4"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="id" id="delete_id">
                    <div class="mb-3">
                        <input type="perusahaan" disabled
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="delete_perusahaan" name="perusahaan">
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

@include('backend.template.footer')

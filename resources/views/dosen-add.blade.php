<x-navbar>

    <script src="js/latihan.js"></script>

    <h1>Halaman Tambah Data Dosen</h1>

    <div class="mt-5 col-8 m-auto">
        <form action="dosen" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Nama</label>
                <input type="text"  name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="nip">NIP</label>
                <input type="text" name="nip" class="form-control" id="nip" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">
                    Save
                </button>
            </div>
            <div class="mb-3">
                {{-- <button class="btn btn-danger">
                    Kocak
                </button>
            </div> --}}
        </form>
    </div>
</x-navbar>

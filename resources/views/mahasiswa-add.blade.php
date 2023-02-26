<x-navbar>
    <h1>Halaman Tambah Data Mahasiswa</h1>

    <div class="mt-5 col-8 m-auto">
        <form action="mahasiswa" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Nama</label>
                <input type="text"  name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="npm">NPM</label>
                <input type="text" name="npm" class="form-control" id="npm" required>
            </div>
            <div class="mb-3">
                <label for="nohp">Nomor HP</label>
                <input type="text" name="nohp"class="form-control" id="nohp" required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-navbar>

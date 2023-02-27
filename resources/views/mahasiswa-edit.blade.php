<x-navbar>
    <h1>Halaman Edit Mahasiswa</h1>

    <h4>Kamu sedang mengedit data dari </h4>


    <div class="mt-5 col-8 m-auto">
        <form action="/mahasiswa/{{ $mahasiswa->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Nama</label>
                <input type="text"  name="name" class="form-control" id="name" value="{{ $mahasiswa->name }}" required>
            </div>
            <div class="mb-3">
                <label for="npm">NPM</label>
                <input type="text" name="npm" class="form-control" id="npm" value="{{ $mahasiswa->npm }}"  required>
            </div>
            <div class="mb-3">
                <label for="nohp">Nomor HP</label>
                <input type="text" name="nohp"class="form-control" id="nohp" value="{{ $mahasiswa->nohp }}"  required>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-navbar>

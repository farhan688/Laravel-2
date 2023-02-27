<x-navbar>
    <h1 class="mt-4">Halaman Delete Data Mahasiswa</h1>

    <div class="mt-5">
        <h4>Apakah anda yakin ingin menghapus data dari {{ $mahasiswa->name }} ({{ $mahasiswa->npm }})</h4>
        <br>
        <a href="/mahasiswas" class="btn btn-primary">Cancel</a>
        <form style="display: inline-block" action="/mahasiswa-destroy/{{ $mahasiswa->id }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>
</x-navbar>

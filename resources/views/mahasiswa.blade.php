<x-navbar>
    <div class="mt-3">
        <h1>Ini Halaman Mahasiswa</h1>
        <br>
        <br>
        <h5 class="d-flex justify-content-center">List Mahasiswa</h5>

        <div class="my-3 col-12 col-sm-8 col-md-4">
            <form action="" method="get">
                <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" name="keyword" placeholder="Keyword" aria-label="Username" aria-describedby="addon-wrapping">
                    <button class="input-group-text btn ntn-primary" id="addon-wrapping">Search</span>
                </div>
            </form>
        </div>
        <a href="mahasiswa-add" class="btn btn-primary">Add Data</a>

        @if (Session::has('status'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif

        <table class="table" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>NPM</th>
                    <th>Nomor HP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswaList as $data)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $data->name }}</th>
                    <th>{{ $data->npm }}</th>
                    <th>{{ $data-> nohp }}</th>
                    <th>
                        <a href='mahasiswa/{{ $data->id }}'>Detail</a>
                        <a href='mahasiswa-edit/{{ $data->id }}'>Edit</a>
                        <a href='mahasiswa-delete/{{ $data->id }}'>Delete</a>
                    </th>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div class="my-2">
        {{ $mahasiswaList->withQueryString()->links() }}
    </div>
</x-navbar>

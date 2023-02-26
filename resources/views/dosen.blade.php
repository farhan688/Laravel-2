<x-navbar>
    <h1>Ini Halaman Dosen</h1>

    <a href="dosen-add" class="btn btn-primary">Add Data</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>NPM</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosenList as $data)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $data->name }}</th>
                <th>{{ $data->nip }}</th>
                <th>
                    <a href='dosen/{{ $data->id }}'>Detail</a>
                    <a href=''>Edit</a>
                    <a href=''>Delete</a>
                </th>
            </tr>
            @endforeach
        </tbody>

    </table>
</x-navbar>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@session('success')
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endsession 

@session('error')
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@endsession 

<div class="container">
    <a href="{{ url('/siswa/create') }}" class="btn btn-primary mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
      </svg><br>Tambah Data</a><br>
<table border="1" class="table table-striped table-bordered">
    <tr class="table-dark">
        <td>No</td>
        <td>Nama Lengkap</td>
        <td>Jenis Kelamin</td>
        <td>Golongan Darah</td>
        <td colspan="2" class="text-center">Aksi</td>
    </tr>
    @foreach ($siswa as $row)
    <tr>
        <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
        <td>{{ $row->nama_lengkap }}</td>
        <td>{{ $row->jenis_kelamin }}</td>
        <td>{{ $row->golongan_darah }}</td>
        <td class="text-center">
            <a href="{{ url('/siswa/edit/' . $row->id) }}" class="btn btn-success d-flex justify-content-center">Edit</a>
        </td>
        <td class="text-center d-flex justify-content-center">
            <form action="{{ url('/siswa', $row->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>

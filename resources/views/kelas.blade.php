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
    <h1 class="text-center">Data Kelas</h1><br>
<a href="{{ url('/kelas/create') }}" class="btn btn-primary mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
    <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
  </svg><br>Tambah Data</a><br>
<table border="1" class="table table-striped table-bordered">
    <tr class="table-dark">
        <td>No</td>
        <td>Nama kelas</td>
        <td>Jurusan</td>
        <td>Lokasi ruangan</td>
        <td>Nama wali kelas</td>
        <td colspan="2" class="text-center">Aksi</td>
    </tr>
    @foreach ($kelas as $row)
    <tr class="{{ @$i % 2 == 0 ? 'table-success':'table-warning'}}">
        <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
        <td>{{ $row->nama_kelas }}</td>
        <td>{{ $row->jurusan }}</td>
        <td>{{ $row->lokasi_ruangan }}</td>
        <td>{{ $row->nama_wali_kelas }}</td>
        <td class="text-center">
            <a href="{{ url('/kelas/edit/' . $row->id) }}" class="btn btn-success d-flex justify-content-center">Edit</a>
        </td>
        <td class="text-center d-flex justify-content-center">
            <form action="{{ url('/kelas', $row->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</form>
</div>



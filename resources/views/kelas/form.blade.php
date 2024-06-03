<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

@session('error')
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@endsession 

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Perhatian!</strong>
        <br>
        <ul>
            @foreach ( $errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container mt-5">
    <div class="row">
        <h1>Form Kelas</h1>
<form action="{{ url('kelas', @$kelas->id) }}" method="POST">
    @csrf

    @if (!empty(@$kelas))
        @method('PATCH')
    @endif

    Nama Kelas : <input type="text" name="nama_kelas" class="form-control" placeholder="Contoh: XI RPL 1" value="{{ old('nama_kelas', @$kelas->nama_kelas) }}"> <br>

    Jurusan :
    <select name="jurusan" class="form-control">
        <option value="{{old('jurusan')}}">Pilih Jurusan Anda</option>
        <option value="Rekayasa Perangkat Lunak" {{ old('jurusan', @$kelas->jurusan) == 'Rekayasa Perangkat Lunak'  ? 'selected' : '' }}>RPL</option>
        <option value="Teknik Jaringan dan Komputer"{{ old('jurusan', @$kelas->jurusan) == 'Teknik Jaringan dan Komputer' ? 'selected' : '' }}>TKJ</option>
        <option value="Elektronika"{{ old('jurusan', @$kelas->jurusan) == 'Elektronika' ? 'selected' : '' }}>TAV</option>
        <option value="Instalasi Listrik" {{ old('jurusan', @$kelas->jurusan) == 'Instalasi Listrik' ? 'selected' : '' }}>TITL</option>
        <option value="Desain Komunikasi Visual" {{ old('jurusan', @$kelas->jurusan) == 'Desain Komunikasi Visual' ? 'selected' : '' }}>DKV</option>
    </select> <br>
    
    Lokasi Ruangan : <input type="text" placeholder="Contoh: D 2.3" name="lokasi_ruangan" class="form-control" value="{{ old('lokasi_ruangan', @$kelas->lokasi_ruangan) }}"><br>
    Wali Kelas : <input type="text" class="form-control" name="nama_wali_kelas" value="{{ old('nama_wali_kelas', @$kelas->nama_wali_kelas) }}"> <br>
    <input type="submit" value="Simpan" class="btn btn-primary">
</form>
    </div>
</div>

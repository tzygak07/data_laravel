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
        <h1>Form Siswa</h1>
<form action="{{ url('siswa', @$siswa->id) }}" method="POST">
    @csrf

    @if (!empty(@$siswa))
        @method('PATCH')
    @endif

    NIS : <input type="text" name="nis" value="{{old('nis', @$siswa->nis)}}" class="form-control"><br>
    Nama Lengkap : <input type="text" class="form-control" name="nama_lengkap" value="{{ old('nama_lengkap',  @$siswa->nama_lengkap) }}" ><br>
    Jenis Kelamin : <br>
    <input type="radio"  class="form-check-input" name="jenis_kelamin" id="L" value="L" {{ old('jenis_kelamin',@$siswa->jenis_kelamin) == 'L' ? 'checked' : '' }}>
    <label for="L" class="form-check-label">Laki - Laki</label>
    <br>

    <input class="form-check-input" type="radio" name="jenis_kelamin" id="P" value="P" {{ old('jenis_kelamin',   @$siswa->jenis_kelamin) == 'P' ? 'checked' : '' }}>
    <label class="form-check-label" for="P" class="form-check-label">Perempuan</label> <br> <br>
    Golongan Darah : <br>

    <select name="golongan_darah" class="form-control">
        <option value="" value="{{old('golongan_darah')}}">Pilih Golongan Darah</option>
        <option value="A" {{ old('golongan_darah', @$siswa->golongan_darah) == 'A' ? 'selected' : '' }}>A</option>
        <option value="B" {{ old('golongan_darah', @$siswa->golongan_darah) == 'B' ? 'selected' : '' }}>B</option>
        <option value="AB" {{ old('golongan_darah', @$siswa->golongan_darah) == 'AB' ? 'selected' : '' }}>AB</option>
        <option value="O" {{ old('golongan_darah', @$siswa->golongan_darah) == 'O' ? 'selected' : '' }}>O</option>
        <option value="C">C</option>
    </select> <br>

    <input type="submit" value="Simpan" class="btn btn-success">
</form>
    </div>
</div>
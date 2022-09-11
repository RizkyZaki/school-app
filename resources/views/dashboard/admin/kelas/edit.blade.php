@extends('dashboard.template.main')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Kelas</h6>
        </div>
        <div class="card-body p-5">
            <form action="{{url('kelas/'. $kelas->id)}}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Kelas</label>
                    <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror" name="nama_kelas"
                        id="exampleFormControlInput1" placeholder="Nama Mapel" value="{{$kelas->nama_kelas}}">
                    @error('nama_kelas')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan"
                        id="exampleFormControlInput1" placeholder="Nama Mapel" value="{{$kelas->jurusan}}">
                    @error('jurusan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-primary">
                    Save
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
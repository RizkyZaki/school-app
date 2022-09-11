@extends('dashboard.template.main')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Materi List</h6>
        </div>
        <div class="card-body p-5">
            <form action="{{url('mapel/'. $mapel->id)}}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Mata Pelajaran</label>
                    <input type="text" class="form-control @error('nama_mapel') is-invalid @enderror" name="nama_mapel"
                        id="exampleFormControlInput1" placeholder="Nama Mapel" value="{{$mapel->nama_mapel}}">
                    @error('nama_mapel')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">
                    Save
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
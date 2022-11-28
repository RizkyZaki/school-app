@extends('dashboard.template.main')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Buat Materi</h6>
        </div>
        <div class="card-body p-5">
            <form action="{{url('materi')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                        id="exampleFormControlInput1" placeholder="Judul Materi">
                    @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="category">Kelas</label>
                    <select class="form-select @error('id_kelas') is-invalid @enderror" id="inputGroupSelect01"
                        name="id_kelas">
                        <option>-- Pilih --</option>
                        @foreach ($kelas as $k)
                        <option value="{{ $k->id}}">{{ $k->nama_kelas}} | {{$k->jurusan}}</option>
                        @endforeach
                    </select>
                    @error('id_kelas')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label" for="category">Mata Pelajaran</label>
                    <select class="form-select @error('id_mapel') is-invalid @enderror" id="inputGroupSelect01"
                        name="id_mapel">
                        <option>-- Pilih --</option>
                        @foreach ($mapel as $m)
                        <option value="{{ $m->id}}">{{ $m->nama_mapel}}</option>
                        @endforeach
                    </select>
                    @error('id_mapel')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi Materi</label>
                    <input type="hidden" name="isi" id="isi">
                    <trix-editor input="isi"></trix-editor>
                    @error('isi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    {{-- <input type="text" class="form-control @error('nama_mapel') is-invalid @enderror" name="isi"
                        id="exampleFormControlInput1" placeholder="Nama Mapel">
                    @error('nama_mapel')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror --}}
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label @error('gambar') is-invalid @enderror">Pilih Foto
                        Materi</label>
                    <input class="form-control" name="gambar" type="file" id="formFile" accept="image/*">
                    @error('gambar')
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
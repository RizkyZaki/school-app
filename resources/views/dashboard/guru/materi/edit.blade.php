@extends('dashboard.template.main')

@section('content')
<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Materi</h6>
    </div>
    <div class="card-body p-5">
      <form action="{{url('materi/'. $materi->slug)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="oldImage" id="" value="{{$materi->gambar}}">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Judul</label>
          <input type="text" class="form-control @error('judul') is-invalid @enderror"
            value="{{old('judul', $materi->judul)}}" name="judul" id="exampleFormControlInput1"
            placeholder="Nama Mapel">
          @error('judul')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        {{-- <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"
            id="exampleFormControlInput1" placeholder="Nama Mapel">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div> --}}
        <div class="mb-3">
          <label class="form-label" for="category">Kelas</label>
          <select class="form-select @error('id_kelas') is-invalid @enderror" id="inputGroupSelect01" name="id_kelas">
            @foreach ($kelas as $k)
            @if (old('id_kelas', $materi->id_kelas) == $k->id)
            <option value="{{$k->id}}" selected>{{$k->nama_kelas}} | {{$k->jurusan}}</option>
            @else
            <option value="{{ $k->id}}">{{ $k->nama_kelas}} | {{$k->jurusan}}</option>
            @endif
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
          <select class="form-select @error('id_mapel') is-invalid @enderror" id="inputGroupSelect01" name="id_mapel">
            @foreach ($mapel as $m)
            @if (old('id_mapel', $materi->id_mapel) == $m->id)
            <option value="{{$m->id}}" selected>{{$m->nama_mapel}}</option>
            @else
            <option value="{{ $m->id}}">{{ $m->nama_mapel}}</option>
            @endif
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
          <input type="hidden" name="isi" id="isi" value="{{old('isi', $materi->isi)}}">
          <trix-editor input="isi"></trix-editor>
          @error('isi')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label @error('gambar') is-invalid @enderror">Pilih Foto
            Materi</label>
          <input class="form-control" name="gambar" type="file" id="formFile" accept="image/*"
            value="{{$materi->gambar}}">
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
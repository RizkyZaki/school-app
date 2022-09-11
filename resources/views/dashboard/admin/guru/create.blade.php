@extends('dashboard.template.main')

@section('content')
<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Guru</h6>
    </div>
    <div class="card-body p-5">
      <form action="{{url('guru/create')}}" method="POST">
        @csrf
        <div class="form-group">
          <input type="text" name="nama_lengkap"
            class="form-control form-control-user @error('nama_lengkap') is-invalid @enderror" id="exampleInputEmail"
            aria-describedby="emailHelp" placeholder="Nama Lengkap...">
          @error('nama_lengkap')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <input type="text" name="username"
            class="form-control form-control-user @error('username') is-invalid @enderror" id="exampleInputEmail"
            aria-describedby="emailHelp" placeholder="Username...">
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <input type="password" name="password"
            class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword"
            placeholder="Password">
          @error('password')
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
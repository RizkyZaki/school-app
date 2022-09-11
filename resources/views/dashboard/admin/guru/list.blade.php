@extends('dashboard.template.main')

@section('content')
<div class="container-fluid">

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Guru</h6>
    </div>
    <div class="card-body p-5">
      @if(session()->has('berhasil'))
      <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>{{session('berhasil')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <a class="btn btn-primary mb-3" href="{{url('guru/create')}}">Tambah Guru</a>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Nama Guru</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php
            $nomor = 1;
            @endphp
            @foreach ($guru as $item)
            <tr>
              <td>{{$nomor++}}</td>
              <td>{{$item->username}}</td>
              <td>{{$item->nama_lengkap}}</td>
              <td>
                <a class="btn btn-success btn-sm" href="{{url('guru/'. $item->id)}}" role="button">Edit</a>
                <form action="guru/{{$item->id}}" method="POST" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger btn-sm" role="button">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{-- {{$kelas->links()}} --}}
      </div>
    </div>
  </div>

</div>
@endsection
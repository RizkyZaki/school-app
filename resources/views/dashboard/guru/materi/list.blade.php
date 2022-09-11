@extends('dashboard.template.main')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Materi List</h6>
        </div>
        <div class="card-body p-5">
            @if(session()->has('berhasil'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{session('berhasil')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <a class="btn btn-primary mb-3" href="{{url('materi/create')}}">Add Mapel</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kelas & Jurusan</th>
                            <th>Mata Pelajaran</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $nomor = 1;
                        @endphp
                        @foreach ($materi as $item)
                        <tr>
                            <td>{{$nomor++}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->kelas != null ? $item->kelas->nama_kelas:''}} -|- {{$item->kelas != null ?
                                $item->kelas->jurusan:''}}</td>
                            <td>{{$item->mapel != null ? $item->mapel->nama_mapel:''}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{url('materi/'.$item->slug)}}">Detail</a>
                                <a class="btn btn-success" href="{{url('materi/'.$item->slug.'/edit')}}">Edit</a>
                                <form action="materi/{{$item->slug}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" role="button">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
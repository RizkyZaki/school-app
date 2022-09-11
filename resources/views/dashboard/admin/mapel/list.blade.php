@extends('dashboard.template.main')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Materi List</h6>
        </div>
        <div class="card-body p-5">
            @if(session()->has('berhasil'))
            <div class="alert alert-primary alert-dismissible fade show mt-2" role="alert">
                <strong>{{ session('berhasil')}}</strong>
            </div>
            @endif
            <a class="btn btn-primary mb-3" href="{{url('mapel/create')}}">Add Mapel</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mapel</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $nomor = 1;
                        @endphp
                        @foreach ($mapel as $item)
                        <tr>
                            <td>{{$nomor++}}</td>
                            <td>{{$item->nama_mapel}}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{url('mapel/'. $item->id .'/edit')}}"
                                    role="button">Edit</a>
                                <form action="{{url('mapel/'.$item->id)}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" role="button">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$mapel->links()}}
            </div>
        </div>
    </div>

</div>
@endsection
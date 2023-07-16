@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3><strong>DATA JENIS SEPATU</strong></h3>
                @if (session()->has('success'))
                <div class="alert alert-info" role="alert">
                    {{ session ('success')}}
                </div>
                @endif
            </div>
        <div class="card-body">
        <div class="mb-3">
            <a class="btn btn-primary" href="{{ url('jenissepatu/create')}}">Tambah Data</a>    
        </div>
        <table class="table table-light table-striped-columns">
            <tr>
                <td><strong>NO</strong></td>
                <td><strong>NAMA SEPATU</strong></td>
                <td><strong>EDIT</strong></td>
                <td><strong>HAPUS</strong></td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->jenissepatu_id}}</td>
                <td>{{ $row->jenissepatu_nama}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('jenissepatu/' .$row->jenissepatu_id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('jenissepatu/' .$row->jenissepatu_id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        </div>
        </div>
    </div>
@endsection
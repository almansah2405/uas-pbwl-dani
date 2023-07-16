@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3><strong>DATA SEPATU</strong></h3>
                @if (session()->has('success'))
                <div class="alert alert-info" role="alert">
                    {{ session ('success')}}
                </div>
                @endif
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a class="btn btn-primary" href="{{ url('sepatu/create')}}">Tambah Data</a>
                </div>
                <table class="table table-light table-striped-columns">
                    <tr>
                        <td><strong>NO</strong></td>
                        <td><strong>JENIS SEPATU</strong></td>
                        <td><strong>NAMA</strong></td>
                        <td><strong>HARGA</strong></td>
                        <td><strong>STOCK</strong></td>
                        <td><strong>EDIT</strong></td>
                        <td><strong>HAPUS</strong></td>
                    </tr>
                    @foreach ($rows as $row)
                    <tr>
                        <td>{{ $row->sepatu_id}}</td>
                        <td>{{ $row->jenissepatu->jenissepatu_nama}}</td>
                        <td>{{ $row->sepatu_nama}}</td>
                        <td>{{ $row->sepatu_harga}}</td>
                        <td>{{ $row->sepatu_stock}}</td>
                        <td><a class="btn btn-info btn-sm float" href="{{url('sepatu/' .$row->sepatu_id. '/edit')}}">Edit</a></td>
                        <td>
                            <form action="{{url('sepatu/' .$row->sepatu_id)}}" method="post">
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
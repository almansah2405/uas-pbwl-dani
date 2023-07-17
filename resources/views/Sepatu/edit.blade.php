@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>EDIT DATA SEPATU</h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/sepatu/' .$row->sepatu_id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="mb-3">
                        <label for="">JENIS SEPATU</label>
                        <select name="sepatu_id_jenissepatu" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($jenissepatu as $jenis)
                                <option value="{{$jenis->jenissepatu_id}}">{{$jenis->jenissepatu_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA SEPATU</label>
                        <input type="text" name="sepatu_nama" class="form-control" value="{{$row->sepatu_nama}}">
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA</label>
                        <input type="text" name="sepatu_harga" class="form-control" value="{{$row->sepatu_harga}}">
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH PEMBELIAN</label>
                        <input type="text" name="sepatu_stock" class="form-control" value="{{$row->sepatu_stock}}">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
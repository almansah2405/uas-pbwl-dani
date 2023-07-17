@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3><STRONG>TAMBAH DATA SEPATU</STRONG></h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/sepatu')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for=""><strong>JENIS SEPATU</strong></label>
                        <select name="sepatu_id_jenissepatu" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($jenissepatu as $jenis)
                                <option value="{{$jenis->jenissepatu_id}}">{{$jenis->jenissepatu_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for=""><strong>NAMA SEPATU</strong></label>
                        <input type="text" name="sepatu_nama" class="form-control" placeholder="Nama Sepatu">
                    </div>
                    <div class="mb-3">
                        <label for=""><strong>HARGA</strong></label>
                        <input type="text" name="sepatu_harga" class="form-control" placeholder="Harga Sepatu">
                    </div>
                    <div class="mb-3">
                        <label for=""><strong>JUMLAH PEMBELIAN</strong></label>
                        <input type="text" name="sepatu_stock" class="form-control" placeholder="Stock Sepatu">
                    </div>
                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
                        <input type="button" class="btn btn-danger" value="BATAL" onclick="history.go(-1);" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
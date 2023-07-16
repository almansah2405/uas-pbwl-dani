@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3><strong>TAMBAH DATA PELANGGAN</strong></h3>
            </div>
            <div class="card-body">
                <form action="{{ url('/pelanggan')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for=""><strong>MERK SEPATU</strong></label>
                        <select name="pelanggan_id_sepatu" id="" class="form-control">
                            <option value="">---Silahkan Pilih---</option>
                            @foreach ($sepatu as $spt)
                                <option value="{{$spt->sepatu_id}}">{{$spt->sepatu_nama}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="mb-3">
                        <label for=""><strong>NAMA</strong></label>
                        <input type="text" name="pelanggan_nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label for=""><strong>Alamat</strong></label>
                        <input type="text" name="pelanggan_alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <label for=""><strong>Nomor Hp</strong></label>
                        <input type="text" name="pelanggan_hp" class="form-control" placeholder="Nomor Hp">
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
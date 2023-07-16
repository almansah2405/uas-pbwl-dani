@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3><strong>TAMBAH DATA JENIS SEPATU</strong></h3>      
            </div>
            <div class="card-body">
                <form action="{{ url('/jenissepatu')}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label for=""><strong>NAMA JENIS SEPATU</strong></label>
                        <input type="text" name="jenissepatu_nama" class="form-control" placeholder="Jenis Sepatu">
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
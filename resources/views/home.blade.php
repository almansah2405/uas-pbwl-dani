@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Selamat Datang') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('Selamat Datang ') }} --}}
                    <header>
                        <img src="{{ asset('img/header.jpg')}}" alt="">
                    </header>

                    <div class="content">
                        <div class="wrapper">
                            <div class="card-content">
                                <h1 class="title">Sneakers</h1>
                                <img src="{{ asset('img/sneakers.jpg')}}" alt="">
                            </div>
                            <div class="card-content">
                                <h1 class="title">Brodo</h1>
                                <img src="{{ asset('img/brodo.jpg')}}" alt="">
                            </div>
                            <div class="card-content">
                                <h1 class="title">Pansus</h1>
                                <img src="{{ asset('img/pansus.jpg')}}" alt="">
                            </div>
                            <div class="card-content">
                                <h1 class="title">Ventela</h1>
                                <img src="{{ asset('img/ventela.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

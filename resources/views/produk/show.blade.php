@extends('layouts.backend')

@section('content')
    <h1>Halaman Show {{ $produk->name }}</h1>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Produk') }}
                    </div>
                    <div class="float-end">
                        <a href="{{route('produk.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <center><img src="{{ asset('images/produk/' . $produk->image) }}" class="w-50  rounded"></center>
                    <hr>
                    <h2>{{ $produk->nama }}</h2>
                    <h2><p class="tmt-3">
                        {!! $produk->harga !!}
                    </p></h2>
                    <h3><p class="tmt-3">
                        {!! $produk->deskripsi !!}
                    </p></h3>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

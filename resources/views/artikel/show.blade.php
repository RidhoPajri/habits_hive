@extends('layouts.backend')

@section('content')
    <h1>Halaman Show {{ $artikel->name }}</h1>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Artikel') }}
                    </div>
                    <div class="float-end">
                        <a href="{{route('artikel.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <center><img src="{{ asset('images/artikel/' . $artikel->image) }}" class="w-50  rounded"></center>
                    <hr>
                    <h4>{{ $artikel->judul }}</h4>
                    <p class="tmt-3">
                        {!! $artikel->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

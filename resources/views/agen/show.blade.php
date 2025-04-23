@extends('layouts.backend')

@section('content')
    <h1>Halaman Show {{ $agen->name }}</h1>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Agen') }}
                    </div>
                    <div class="float-end">
                        <a href="{{route('agen.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <center><img src="{{ asset('images/agen/' . $agen->image) }}" class="w-50  rounded"></center>
                    <hr>
                    <h4>{{ $agen->nama }}</h4>
                    <p class="tmt-3">
                        {!! $agen->alamat !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

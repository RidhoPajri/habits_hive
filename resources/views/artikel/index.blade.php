@extends('layouts.backend')

@section('content')
    <h6 class="mb-0 text-uppercase">Data Artikel</h6>
<hr>
<div class="card">
    <div class="card-body">
       <div class="col-lg-2">
            <a href="{{ route('artikel.create') }}" class="btn btn-outline-primary  px-4 raised d-flex gap-2">
                <i class="material-icons-outlined">description</i>
                Tambah
            </a>
         </div>
        <table class="table mb-0 table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">judul_artikel</th>
                    <th scope="col">deskripsi</th>
                    <th scope="col">gambar</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artikel as $item)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $item->judul_artikel }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                         <img src="{{ asset('/images/artikel/' . $item->image) }}" width="100">
                    </td>
                    <td>
                        <a href="{{ route('artikel.show', $item->id) }}" class="btn btn-outline-secondary gap-2"><i class="material-icons-outlined">search</i></a>
                        <a href="{{ route('artikel.edit', $item->id) }}" class="btn btn-outline-primary px-5">Edit</a>
                        <a class="btn btn-outline-danger px-5" href="{{ route('artikel.destroy', $item->id) }}" onclick="event.preventDefault();
                            document.getElementById('destroy-form').submit();">
                            Hapus
                        </a>



                        <form id="destroy-form" action="{{ route('artikel.destroy', $item->id) }}"
                            method="POST" class="d-none">
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

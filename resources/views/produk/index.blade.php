@extends('layouts.backend')

@section('content')
    <h6 class="mb-0 text-uppercase">Data tabel Produk </h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="col-lg-3">
                <a href="{{ route('produk.create') }}" class="btn btn-outline-success px-4 raised d-flex gap-2 text-dark">
                    <i class="material-icons-outlined">description</i>
                    Tambah Produk
                </a>
            </div>
            <table class="table mb-0 table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                            <td>
                                <img src="{{ asset('/images/produk/' . $item->image) }}" width="100">
                            </td>
                            <form id="destroy-form" action="{{ route('produk.destroy', $item->id) }}" method="POST"
                                class="d-none">
                                @csrf
                                @method('DELETE')

                                <td>
                                    <a href="{{ route('produk.show', $item->id) }}" class="btn btn-outline-info gap-2 text-dark"><i
                                            class="material-icons-outlined">search</i></a>

                                    <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-outline-warning gap-2 text-dark"><i
                                            class="material-icons-outlined">edit</i></a>

                                    <button type="submit" class="btn btn-outline-danger gap-2 text-dark"><i
                                            class="material-icons-outlined">delete</i></button>
                                    {{-- <a href="{{ route('artikel.edit', $item->id) }}" class="btn btn-warning gap-2"><i
                                        class="material-icons-outlined">edit</i></a> --}}
                                </td>

                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

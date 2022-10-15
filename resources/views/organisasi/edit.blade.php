@extends('layouts.index')

@section('content')
    <h1 class="fw-bold">Halaman Organisasi</h1>
    <h5>Ubah Data Organisasi</h5>
    <div class="line-custom"></div>

    <form action="/organisasi/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" />
        </div>
        <div class="mb-3">
            <label for="posisi" class="form-label">Pembina</label>
            <select name="pembina" id="" class="form-select">
                @foreach ($guru as $item)
                    <option value="{{ $item->id }}" @if ($item->id == $data->guru_id) selected @endif>
                        {{ $item->nama }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="mb-3 form-check"></div>
        <button type="submit" class="btn btn-dark">
            Submit
        </button>
    </form>
@endsection

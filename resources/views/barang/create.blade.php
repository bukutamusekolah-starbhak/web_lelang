@extends('template.app')
@section('content')
@section('judul','Tambah Barang')

<div class="row">
    <div class="container">
        @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        @endif

        <form action="{{route('simpan_barang')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="col-sm-2 col-form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama_barang" name="nama_barang">
    </div>
    <div class="mb-3">
        <label for="" class="col-sm-2 col-form-label">Tanggal </label>
        <input type="date" class="form-control" id="tgl" name="tgl">
    </div>
    <div class="mb-3">
        <label for="" class="col-sm-2 col-form-label">Harga Awal</label>
        <input type="text" class="form-control" id="harga_awal" name="harga_awal">
    </div>
    <div class="mb-3">
        <label for="" class="col-sm-2 col-form-label">Deskripsi Barang</label>
        <input type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang">
    </div>

        <button type="submit" class="btn btn-danger">Simpan</button>
        </form>
    </div>
</div>
@endsection
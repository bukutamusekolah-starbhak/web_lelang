    @extends('template.app')
    @section('content')
    @section('judul','Edit Barang')

    <div class="row">
            <div class="container">
                @if (session('status'))
            <div class="alert alert-danger">{{session('status')}}</div>
                @endif

                <form action="/update_barang{{$barangs->id}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{$barangs->nama_barang}}">
            </div>
            <div class="mb-3">
                <label for="" class="col-sm-2 col-form-label">Tanggal </label>
                <input type="date" class="form-control" id="tgl" name="tgl" value="{{$barangs->tgl}}">
            </div>
            <div class="mb-3">
                <label for="" class="col-sm-2 col-form-label">Harga Awal</label>
                <input type="text" class="form-control" id="harga_awal" name="harga_awal" value="{{$barangs->harga_awal}}">
            </div>
            <div class="mb-3">
                <label for="" class="col-sm-2 col-form-label">Deskripsi Barang</label>
                <input type="text" class="form-control" id="deskripsi_barang" name="deskripsi_barang" value="{{$barangs->deskripsi_barang}}">
            </div>

                <button type="submit" class="btn btn-danger">Simpan</button>
                </form>
            </div>
    </div>
    @endsection
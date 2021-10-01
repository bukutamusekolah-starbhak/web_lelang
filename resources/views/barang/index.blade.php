@extends('template.app')
@section('content')
@section('judul','Data Barang')

<div class="container">
        @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
      @endif
          <div class="row justify-content-center">
              <table class="table g-primary">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Harga Awal</th>
                    <th scope="col">Deskripsi Barang</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>      
                     @foreach ($barang as $no => $barang)
                      <tr>
                        <th Scope="col">{{$no+1}}</th>
                        <td>{{$barang->nama_barang}}</td>
                        <td>{{$barang->tgl}}</td>
                        <td>Rp {{number_format($barang->harga_awal,-2, '.', '.')}}</td>
                        <td>{{$barang->deskripsi_barang}}</td>
                        <td>
                        <a href="/edit_barang{{$barang->id}}" class="btn btn-block btn-primary btn-sm mb-2 mt-2 "><i class="fas fa-edit"></i></a>
                        <form action="/delete_barang{{$barang->id}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-block btn-dark btn-sm" >
                              <i class="far fa-trash-alt">  </i>
                          </button>
                      </form>
                      </td>
                    @endforeach 
                  </tr>
                </tbody>
                </table>
          </div>
@endsection
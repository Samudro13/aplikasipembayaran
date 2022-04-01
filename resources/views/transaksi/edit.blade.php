@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Transaksi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Transaksi</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="card">
    <div class="card-body">
        <form action="{{ route('updateTransaksi', ['id' => $transaksis->id])}}" method="post">
            @csrf

            <div class="form-group">
                <label for="id_barang">Nama Barang</label>
                <select class="form-control" name="id_barang" id="id_barang" required="required">
                    @foreach($barangs as $barang)
                    <option value="{{ $barang->id }}"{{ $barang->id == $transaksis->id_barang ? 'selected' : '' }}>{{ $barang->nama }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id_pelanggan">Nama Pelanggan</label>
                <select class="form-control" name="id_pelanggan" id="id_pelanggan" required="required">
                    @foreach($pelanggans as $pelanggan)
                    <option value="{{ $pelanggan->id }}"{{ $pelanggan->id == $transaksis->id_pelanggan ? 'selected' : '' }}>{{ $pelanggan->nama }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="totalpesanan">Total Pesanan</label>
                <input type="integer" name="totalpesanan" id="totalpesanan" class="form-control" required="required"
                    placeholder="Total Pesanan">
            </div>

            <div class="form-group">
                <label for="tanggalpesanan">Tanggal Pesanan</label>
                <input type="date" name="tanggalpesanan" id="tanggalpesanan" class="form-control" required="required"
                    placeholder="Tanggal Pesanan">
            </div>

            <div class="text-right">
                <a href="{{ route('daftarTransaksi') }}" class="btn-outline-secondary mr-2" role="button">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        {{-- main content here --}}

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Edit Pelanggan</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Edit Pelanggan</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('updatePelanggan', ['id' => $pelanggan->id])}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="nama">Nama Pelanggan</label>
                        <input type="text" name="nama" id="nama" class="form-control" required="required" placeholder="Masukan Nama Barang"
                    </div>

                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" required="required" placeholder="Masukan Alamat"
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">No.HP</label>
                        <input type="text" name="noHP" id="noHP" class="form-control" required="required" placeholder="Masukan No.HP"
                    </div>

                    <div class="text-right">
                        <a href="{{ route('daftarPelanggan') }}" class="btn-outline-secondary mr-2" role="button">Batal</a>
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
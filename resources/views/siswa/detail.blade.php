@extends('layouts.master')

@section('content')

		<h1 class="judul-table-detail">Detail Data Admin Gudang</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
				<form method="GET">
					  <div class="form-group">
					    <label>Nama Depan</label>
					    <input name= "nama_depan" type="text" class="form-control" placeholder="Nama Depan" value="{{$siswa->nama_depan}}" readonly="readonly">
					  </div>
					  
					  <div class="form-group">
					    <label>Nama Belakang</label>
					    <input name= "nama_belakang" type="text" class="form-control" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}" readonly="readonly">
					  </div>

					  <div class="form-group">
					    <label>Pilih Jenis Kelamin</label>
					    <select name= "jenis_kelamin" class="form-control" readonly="readonly">
					      <option value="Laki-Laki" @if($siswa->jenis_kelamin == 'Laki-Laki')@endif>Laki - Laki</option>
					      <option value="Perempuan" @if($siswa->jenis_kelamin == 'Perempuan')@endif>Perempuan</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label>Agama</label>
					    <input name= "agama" type="text" class="form-control" placeholder="Agama" value="{{$siswa->agama}}" readonly="readonly">
					  </div>

					  <div class="form-group">
					    <label>Alamat</label>
					    <!-- <textarea name= "alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" readonly="readonly">{{$siswa->alamat}}</textarea> -->
					    <input name= "alamat" type="text" class="form-control" placeholder="Alamat" value="{{$siswa->alamat}}" readonly="readonly">
					  </div>
			    </form>
			    <a href="/siswa" class="btn btn-success btn-md">Kembali</a>
			    <!-- <button type="submit" class="btn btn-warning"><a href="/siswa"></a>Back</button> -->
		    </div>
		</div>

@endsection

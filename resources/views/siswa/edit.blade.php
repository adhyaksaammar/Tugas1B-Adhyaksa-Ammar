@extends('layouts.master')

@section('content')

		<h1 class="judul-table-detail">Edit Data Admin Gudang</h1>
		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			<div class="col-lg-12">
				<form action="/siswa/{{$siswa->id}}/update" method="POST">
			        	{{csrf_field()}}
					  <div class="form-group">
					    <label>Nama Depan</label>
					    <input name= "nama_depan" type="text" class="form-control" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
					  </div>
					  
					  <div class="form-group">
					    <label>Nama Belakang</label>
					    <input name= "nama_belakang" type="text" class="form-control" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
					  </div>

					  <div class="form-group">
					    <label>Pilih Jenis Kelamin</label>
					    <select name= "jenis_kelamin" class="form-control">
					      <option value="Laki-Laki" @if($siswa->jenis_kelamin == 'Laki-Laki')@endif>Laki - Laki</option>
					      <option value="Perempuan" @if($siswa->jenis_kelamin == 'Perempuan')@endif>Perempuan</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label>Agama</label>
					    <input name= "agama" type="text" class="form-control" placeholder="Agama" value="{{$siswa->agama}}">
					  </div>

					  <div class="form-group">
					    <label>Alamat</label>
					    <input name= "alamat" type="text" class="form-control" placeholder="Alamat" value="{{$siswa->alamat}}" readonly="readonly">
					  </div>
					<button type="submit" class="btn btn-warning">Update</button>
			    </form>	
		    </div>
		</div>

@endsection

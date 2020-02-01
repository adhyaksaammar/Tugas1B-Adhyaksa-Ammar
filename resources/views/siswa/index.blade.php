@extends('layouts.master')

@section('content')
			
			@if(session('sukses'))
				<div class="alert alert-success" role="alert">
				  {{session('sukses')}}
				</div>
			@endif
			<div class="row">
				<div class="col-6">
					<h1 class="judul-table">Admin Gudang Pangan</h1>	
				</div>
				<div class="col-6">
					<button type="button" class="btn btn-info float-right btn-md" data-toggle="modal" data-target="#exampleModal" style="margin-top: 10px;">
					  Tambah Data Admin
					</button>
				</div>

					<table class="table table-borderless">
						<tr class="table-active">
							<th>Nama Depan</th>
							<th>Nama Belakang</th>
							<th>Jenis Kelamin</th>
							<!-- <th>AGAMA</th>
							<th>ALAMAT</th> -->
							<th>Aksi</th>
						</tr>
						@foreach($data_siswa as $siswa)
						<tr>
							<td>{{ $siswa->nama_depan }}</td>
							<td>{{ $siswa->nama_belakang }}</td>
							<td>{{ $siswa->jenis_kelamin }}</td>
							<!-- <td>{{ $siswa->agama }}</td>
							<td>{{ $siswa->alamat }}</td> -->
							<td class="aksi">
								<a href="/siswa/{{$siswa->id}}/detail" class="btn btn-success btn-sm">Detail</a>
								<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Update</a>
								<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin menghapus data admin ?')">Delete</a>
							</td>
						</tr>
						@endforeach
					</table>
			</div>
		</div>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
				      <div class="modal-body">
					        <form action="/siswa/create" method="POST">
					        	{{csrf_field()}}
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Depan</label>
							    <input name= "nama_depan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Depan">
							  </div>
							  
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Belakang</label>
							    <input name= "nama_belakang" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Belakang">
							  </div>

							  <div class="form-group">
							    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
							    <select name= "jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
							      <option>Laki - Laki</option>
							      <option>Perempuan</option>
							    </select>
							  </div>

							  <div class="form-group">
							    <label for="exampleInputEmail1">Agama</label>
							    <input name= "agama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Agama">
							  </div>

							  <div class="form-group">
							    <label for="exampleFormControlTextarea1">Alamat</label>
							    <textarea name= "alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							  </div>
							    
					  </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-primary">Submit</button>
					    	</form>		      		
			     </div>
			  </div>
			</div>
		
@endsection
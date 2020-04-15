@extends("layout")

@section("content")
	<h1>Data Toko Stationery</h1><br>
	<!-- <a href="#" class="btn btn-primary">Tambah</a> -->

	@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif

<input class="form-control" type="text" placeholder="Search" aria-label="Search"><br>

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Tambah data </button>
	<a href="/toko/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
		
<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>

	      <div class="modal-body">

	       <form action="/toko/create" method="POST">
	       	@csrf
			  <div class="form-group">
			    <label>Kode Barang</label>
			    <input type="text" name="kode_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Barang">
			    </div>
			 	
			 <div class="form-group">
			    <label>Nama Barang</label>
			    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang">
			    </div>

			  <div class="form-group">
			    <label>Stok </label>
			    <input type="text" name="stok_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stok">
			    </div>    
	
	      </div>

	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	<br><br/>
	
	<!-- <p> -->
	<table class="table table-hover">
		<thead>
			<tr>
				<!-- <th width="5%">ID</th> -->
				<th  width="25%">Kode Barang</th>
				<th  width="30%">Nama Barang</th>
				<th  width="20%">Stok</th>
				<th  width="20%">Action</th>
			</tr>
		</thead>
		<tbody>
			@forelse($data_toko as $data)
				<tr>
					<!-- <td>{{ $data->id }}</td> -->
					<td>{{ $data->kode_barang }}</td>
					<td>{{ $data->nama_barang }}</td>
					<td>{{ $data->stok_barang }}</td>
					<td>
						<!-- <a href="#" class="btn btn-success">Detail</a> -->
						<a href="/toko/{{$data->id}}/edit" class="btn btn-warning">Edit</a>
						<a href="/toko/{{$data->id}}/delete" onclick="return confirm('Apakah Anda Yakin?');" type="button" class="btn btn-danger">Delete</a>

					</td>
				</tr>
				@empty
				<tr>
					<td colspan="4">Data belum tersedia!</td>
				</tr>		
			@endforelse
			</tbody>	
	</table>
@endsection
@extends("layout")

@section("content")
	<h1>Data Toko Stationery</h1>
	<!-- <a href="#" class="btn btn-primary">Tambah</a> -->

	@if(session('sukses'))
<div class="alert alert-success" role="alert">
  {{session('sukses')}}
</div>
@endif


	    
	       <form action="/toko/{{$data->id}}/update" method="POST">
	       	@csrf
			  <div class="form-group">
			    <label>Kode Barang</label>
			    <input type="text" name="kode_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Barang" value="{{$data->kode_barang}}">
			    </div>
			 	
			 <div class="form-group">
			    <label>Nama Barang</label>
			    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang" value="{{$data->nama_barang}}">
			    </div>

			  <div class="form-group">
			    <label>Stok </label>
			    <input type="text" name="stok_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stok" value="{{$data->stok_barang}}">
			    </div>    
	
	      </div>

	      <div class="modal-footer">
	        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
	        <button type="submit" class="btn btn-primary">Updates</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	
@endsection
@extends("layout.app")

@push("style")
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section("content")
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Toko Stationery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Kelola Mahasiswa</a></li>
              <li class="breadcrumb-item active">Daftar Mahasiswa</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.content-header -->
 <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
	
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

	</div>
</div>
</div>
</section>
@endsection
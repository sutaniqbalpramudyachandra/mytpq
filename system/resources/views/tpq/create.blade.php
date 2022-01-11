@extends('template.base')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-2">
			<div class="card">
				<div class="card-header">
					Tambah data
				</div>
				<div class="card-body">
					<form action="{{url('admin/tpq')}}" method="post">
						@csrf
					<div class="form-row">	
						<div class="form-group col-md-4">
		                  <label>Id TPQ</label>
		                  <input type="text" name="id_tpq" class="form-control" style="width: 100%;" required="true">
		                </div>
							
		                <div class="form-group col-md-4">
		                  <label>Nama TPQ</label>
		                  <input type="text" name="nama" class="form-control" style="width: 100%;" required="true">
		                </div>
		                 <div class="form-group col-md-4">
		                  <label>Alamat</label>
		                  <input type="text" name="alamat" class="form-control" style="width: 100%;" required="true">
		                </div>
		                 <div class="form-group col-md-4">
		                  <label>No. HP</label>
		                  <input type="varchar" name="no_hp" class="form-control" style="width: 100%;" required="true">
		                </div>
		                 <div class="form-group col-md-4">
		                  <label>Deskripsi</label>
		                  <input type="text" name="deskripsi" class="form-control" style="width: 100%;" required="true">
		                </div>

		                <div class="form-group col-md-4">
		                  <label>Latitude</label>
		                  <input type="varchar" name="latitude" class="form-control" style="width: 100%;" required="true">
		                </div>
		                 <div class="form-group col-md-4">
		                  <label>Longtitude</label>
		                  <input type="varchar" name="longtitude" class="form-control" style="width: 100%;" required="true">
		                </div>
		                 <div class="form-group col-md-4">
		                  <label>Photo</label>
		                  <input type="varchar" name="photo" class="form-control" style="width: 100%;" required="true">
		                </div>
	

		            </div>

					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
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
					<form action="{{url('admin/tpq', $user->id)}}" method="post">
						@csrf
						@method("PUT")
					<div class="form-row">	
						<div class="form-group col-md-4">
		                  <label>ID TPA</label>
		                  <select name="id_tpq" class="form-control select2" style="width: 100%;" required="true">
		                  	<option value="">--Pilih TPA--</option>
		                  	<option value="1" <?php if ($user->id_tpq=='1') {echo "selected";}?>>Tpa 1</option>
		                  </select>
		                </div>	

		                <div class="form-group col-md-4">
		                  <label>Username</label>
		                  <input type="text" name="username" class="form-control" style="width: 100%;" required="true" value="{{$user->username}}">
		                </div>

		                <div class="form-group col-md-4">
		                  <label>email</label>
		                  <input type="email" name="email" class="form-control" style="width: 100%;" required="true" value="{{$user->email}}">
		                </div>
		            </div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="" class="control-label">password</label>
							<input type="password" name="password" class="form-control" >
						</div>

						<div class="form-group col-md-6">
							<label for="" class="control-label">Level</label>
							<select name="level1" class="form-control select2" style="width: 100%;" required="true">
		                  	<option value="">--Pilih Level--</option>
		                  	<option value="admin" <?php if ($user->level1=='admin') {echo "selected";}?>>Admin</option>
		                  </select>
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
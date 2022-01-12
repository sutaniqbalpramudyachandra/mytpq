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
					<form action="{{url('admin/artikel')}}" method="post">
						@csrf
					<div class="form-row">	
						<div class="form-group col-md-4">
		                  <label for="" class="control-label">Tanggal</label>
							<input type="date" name="tanggal" class="form-control" value="<?php date_default_timezone_set('Asia/Pontianak'); echo date("Y-m-d"); ?>" required="true" readonly>
		                </div>	
		            </div>

					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="" class="control-label">Judul</label>
							<textarea class="ckeditor" id="ckedtor" name="judul"></textarea>
						</div>

					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="" class="control-label">isi</label>
							<textarea class="ckeditor" id="ckedtor" name="isi"></textarea>
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
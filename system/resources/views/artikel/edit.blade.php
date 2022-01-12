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
					<form action="{{url('admin/artikel',$artikel->id)}}" method="post">
						@csrf
						@method("PUT")
					<div class="form-row">	
						<div class="form-group col-md-4">
		                  <label for="" class="control-label">Tanggal</label>
							<input type="date" name="tanggal" class="form-control" value="{{$artikel->tanggal}}" required="true" readonly>
		                </div>	
		            </div>

					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="" class="control-label">Judul</label>
							<textarea class="ckeditor" id="ckedtor" name="judul" >{{$artikel->judul}}</textarea>
						</div>

					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="" class="control-label">isi</label>
							<textarea class="ckeditor" id="ckedtor" name="isi" >{{$artikel->isi}}</textarea>
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
@extends('template.base')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-2">
			<div class="card">
				<div class="card-header">
					Index Name
					<a href="{{url('admin/artikel/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-datatable table-bordered table-hover table-sm">
							<thead>
								<th width="2%">No</th>
								<th width="5%">Aksi</th>
								<th width="20%">Judul</th>
								<th>Isi</th>
								<th width="10%">Tanggal</th>
							</thead>
							<tbody>
								@foreach($list_artikel as $artikel)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											
										<a href="{{url('admin/artikel', $artikel->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
										<a href="{{url('admin/artikel', $artikel->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete', ['url' => url('admin/artikel', $artikel->id)])

										</div>
									</td>
									<td>{!!nl2br($artikel->judul)!!}</td>
									<td>{!!nl2br($artikel->isi)!!}</td>
									<td>{{$artikel->tanggal}}</td>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
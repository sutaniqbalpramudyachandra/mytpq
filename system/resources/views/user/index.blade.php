@extends('template.base')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-2">
			<div class="card">
				<div class="card-header">
					Index Name
					<a href="{{url('admin/user/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-datatable table-bordered table-hover table-sm">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>ID TPQ</th>
								<th>Username</th>
								<th>Email</th>
								<th>Level1</th>
							</thead>
							<tbody>
								@foreach($list_user as $user)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											
										<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete', ['url' => url('admin/user', $user->id)])
										</div>
									</td>
									<td>{{$user->id_tpq}}</td>
									<td>{{$user->username}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->level1}}</td>
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
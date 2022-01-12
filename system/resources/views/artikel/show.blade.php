@extends('template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-2">
			<div class="card">
				<div class="card-header">
					{!! nl2br($artikel->judul) !!}
				</div>
				<div class="card-body">
					{!! nl2br($artikel->isi) !!}
				</div>
			</div>
		</div>
	</div>
</div>


@endsection
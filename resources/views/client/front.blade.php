@extends('layout.client_base')

@section('content')
	<main class="front-container">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="box padding-50 bg-white">
						<a href="{{url('/new')}}">Submit a Ticket</a>
					</div>

				</div>
				<div class="col-md-6">
					<div class="box padding-50 bg-white">
						<a href="#">View Existing Ticket</a>
					</div>
				</div>
			</div>
		</div>
	</main>
@endsection
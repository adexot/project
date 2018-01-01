@extends('layout.client_base') @section('content')
<main>
	<div class="ticket-box container bg-white">
		<h2>New Ticket Details</h2>
		<div class="row">
			<div class="col-md-12">
				<h3>Title:</h3>
				<p>{{ $ticket->title }}</p>
			</div>
		</div>
	</div>
</main>
@endsection

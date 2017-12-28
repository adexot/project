@extends('layout.client_base') @section('content')
<main>
	<div class="ticket-box container bg-white">
		<div class="ticket-form m-t-20">
			<form class="form-inline" method="POST" action="">
				<div class="form-group col-md-12">
					<div class="col-md-3">
						<label for="">Owner</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="" class="form-control" id="">
					</div>
				</div>
				<div class="form-group col-md-12 m-t-20">
					<div class="col-md-3">
						<label for="">Email</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="" class="form-control" id="">
					</div>
				</div>
				<div class="form-group col-md-12 m-t-20">
					<div class="col-md-3">
						<label for="">Mobile</label>
					</div>
					<div class="col-md-9">
						<input type="tel" name="" class="form-control" id="">
					</div>
				</div>
				<div class="form-group col-md-12 m-t-20">
					<div class="col-md-3">
						<label for="">Title</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="" class="form-control" id="">
					</div>
				</div>
				<div class="form-group col-md-12 m-t-20">
					<div class="col-md-3">
						<label for="">category</label>
					</div>
					<div class="col-md-5">
						<select name="" id="" class="form-control">
							<option value="">select an option</option>
							<option value="">Payment</option>
							<option value="">ID card</option>
						</select>
					</div>
				</div>
				<div class="form-group col-md-12 m-t-20">
					<div class="col-md-3">
						<label for="">Priority</label>
					</div>
					<div class="col-md-5">
						<select name="" id="" class="form-control">
							<option value="">select an option</option>
							<option value="">high</option>
							<option value="">medium</option>
							<option value="">low</option>
						</select>
					</div>
				</div>
				<div class="form-group col-md-12 m-t-20">
					<div class="col-md-3">
						<label for="">Description</label>
					</div>
					<div class="col-md-9">
						<textarea name="" id="" class="form-control"></textarea>
					</div>
				</div>

				{{ csrf_field() }}
				<div class="col-md-12 m-t-20 form-group pull-right">
					<button type="submit" class="btn btn-primary pull-right" name="button">Submit Ticket</button>
				</div>
			</form>
		</div>
	</div>
</main>
@endsection

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
						<input type="text" name="owner" class="form-control" id="">
					</div>
				</div>
				<div class="form-group col-md-12 m-t-20">
					<div class="col-md-3">
						<label for="">Email</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="email" class="form-control" id="">
					</div>
				</div>
				<div class="form-group col-md-12 m-t-20">
					<div class="col-md-3">
						<label for="">Mobile</label>
					</div>
					<div class="col-md-9">
						<input type="tel" name="phone" class="form-control" id="">
					</div>
				</div>
				<div class="form-group col-md-12 m-t-20">
					<div class="col-md-3">
						<label for="">Title</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="title" class="form-control" id="">
					</div>
				</div>
				<div class="form-group col-md-12 m-t-20">
					<div class="col-md-3">
						<label for="">category</label>
					</div>
					<div class="col-md-5">
						<select name="category" id="" class="form-control">
							<option value="">select an option</option>
							@foreach ($categories as $key => $category)
								<option value="{{ $category->id }}">{{ $category->category_name }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group col-md-12 m-t-20">
					<div class="col-md-3">
						<label for="priority">Priority</label>
					</div>
					<div class="col-md-5">
						<select name="priority" id="" class="form-control">
							<option value="">select an option</option>
							<option value="high">high</option>
							<option value="medium">medium</option>
							<option value="low">low</option>
						</select>
					</div>
				</div>
				<div class="form-group col-md-12 m-t-20">
					<div class="col-md-3">
						<label for="">Description</label>
					</div>
					<div class="col-md-9">
						<textarea name="description" id="" class="form-control"></textarea>
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

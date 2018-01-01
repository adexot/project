@extends('layout.admin_base') @section('content')
<article class="main__content content">
	<div class="content__wrapper">
		<div class="grid__row">

			<div class="grid__col-12 card__wrapper">
				<div class="card card--gray">
					<div class="card__header">
						<div class="card__title">{{ $ticket->title }}</div>
						<div class="card__tools">
							<i class="fa fa-external-link"></i>
						</div>
					</div>

					<div class="card__content">
						<div class="grid__row">
							<div class="grid__col-6">
								<table class="">
									<tbody>
										<tr>
											<td>Tracking ID</td>
											<td>{{ $ticket->unique_id }}</td>
										</tr>
										<tr>
											<td>Created on</td>
											<td>{{ $ticket->created_at }}</td>
										</tr>
										<tr>
											<td>Ticket status:</td>
											<td>{{ ucfirst($ticket->status) }}</td>
										</tr>
										<tr>
											<td>Updated:</td>
											<td>{{ $ticket->updated_at }}</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="grid__col-6">
								<table class="">
									<tbody>
										<tr>
											<td>Category:</td>
											<td>{{ ucfirst($ticket->category->category_name) }}</td>
										</tr>
										<tr>
											<td>Replies:</td>
											<td>{{ count($ticket->comments) }}</td>
										</tr>
										<tr>
											<td>Priority:</td>
											<td>{{ ucfirst($ticket->priority) }}</td>
										</tr>
										<tr>
											<td>Owner</td>
											<td>{{ ucfirst($ticket->user->name) }}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div> <br/></br/>
				<div class="card__title"> Comments</div>
				@forelse ($ticket->comments as $key => $comment)
					<div class="card bordered m-t-20">
						<div class="card__header">
							<table class="">
								<tbody>
									<tr>
										<td>Date added: </td>
										<td>{{ $comment->created_at }}</td>
									</tr>
									<!--<tr>
										<td>Owner: </td>
										<td></td>
									</tr>
									<tr>
										<td>Ticket status: </td>
										<td></td>
									</tr>
									<tr>
										<td>IP address:</td>
										<td></td>
									</tr>-->
								</tbody>
							</table>
						</div>
						<div class="card__content">
							{{ $comment->message }}
						</div>
					</div>

				@empty
					<p>No comments added yet.</p>
				@endforelse
			</div>
			<div class="grid__col-12 card__wrapper">
				<div class="card card--gray">
					<div class="card__header">
						<div class="card__title">Add Response</div>
					</div>
					<div class="card__content">


						<form class="form" action="">
							{{ csrf_field() }}
							<!--<input class="textfield textfield--shadow" placeholder="Tickets Title" />-->
							<textarea class="textfield textfield--shadow" id="textarea-1" rows="3" placeholder="Ticket Response"></textarea>
							<!--<div class="form__group">
								<input class="textfield textfield--shadow" placeholder="Email Assignee" />
								<div class="form__icon form__icon--radius-right">
									@something.com
								</div>
							</div>-->
							<button class="button button--radius button--blue">
								<i class="fa fa-send"></i> &nbsp; Add Comment
							</button>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>

	</div>
</article>
@endsection

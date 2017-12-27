@extends('layout.admin_base') @section('content')
<article class="main__content content">
	<div class="content__wrapper">

		<div class="grid__row">
			<div class="grid__col-12 card__wrapper">

				<div class="card card--gray">
					<div class="card__header">
						<div class="card__title">Opened Tickets</div>
						<div class="card__tools">
							<i class="fa fa-external-link"></i>
						</div>
					</div>

					<div class="card__content">
						<table class="table">
							<thead class="table__head">
								<tr>
									<th class="table__sort--asc" sortable="true">#</th>
									<th class="table__sort--desc" sortable="true">ID</th>
									<th>Title</th>
									<th>Status</th>
                                    <th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody class="table__body">
                                @foreach($tickets as $ticket)
								<tr>
									<td>{{$ticket->id}}</td>
                                    <td>{{$ticket->unique_id}}</td>
									<td>{{$ticket->title}}</td>
                                    <td>{{$ticket->state_id}}</td>
									<td>{{$ticket->created_at}}</td>
									<td>
										<a href="javascript:void(0)" class="button button--green">view</a>
									</td>
								</tr>
                                @endforeach
							</tbody>
						</table>

						<div class="card__wrapper">
							<ul class="pager pager--radius">
								<li>
									<a href="javascript:void(0)" class="pager__page">Previous</a>
								</li>
								<li>
									<a href="javascript:void(0)" class="pager__page">1</a>
								</li>
								<li>
									<a href="javascript:void(0)" class="pager__page">2</a>
								</li>
								<li>
									<a href="javascript:void(0)" class="pager__page">3</a>
								</li>
								<li>
									<a href="javascript:void(0)" class="pager__page">4</a>
								</li>
								<li>
									<a href="javascript:void(0)" class="pager__page">5</a>
								</li>
								<li>
									<a href="javascript:void(0)" class="pager__page">Next</a>
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>

			<div class="grid__col-6 card__wrapper">
				<div class="card card--blue">
					<div class="card__header">
						<div class="card__title">Create Ticket</div>
					</div>
					<div class="card__content">


						<form class="form">

							<input class="textfield textfield--shadow" placeholder="Tickets Title" />
							<textarea class="textfield textfield--shadow" id="textarea-1" rows="3" placeholder="Tickets Description"></textarea>
							<div class="form__group">
								<input class="textfield textfield--shadow" placeholder="Email Assignee" />
								<div class="form__icon form__icon--radius-right">
									@something.com
								</div>
							</div>
							<button class="button button--radius button--blue">
								<i class="fa fa-send"></i> &nbsp; Create
							</button>

						</form>

					</div>
				</div>
			</div>

		</div>

	</div>
</article>
@endsection
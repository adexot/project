@extends('layout.admin_base') @section('content')
<article class="main__content content">
	<div class="content__wrapper">

		<div class="grid__row">

			<div class="grid__col-4 card__wrapper">
				<div class="card card--orange">
					<div class="card__header">
						<div class="card__title">Total Pending Tickets</div>
						<div class="card__tools">
							<i class="fa fa-external-link"></i>
						</div>
					</div>
					<div class="card__content">
						<div class="card__align">
							<div class="card__big-text">
								5
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="grid__col-4 card__wrapper">
				<div class="card card--green">
					<div class="card__header">
						<div class="card__title">Total Open Tickets</div>
						<div class="card__tools">
							<i class="fa fa-external-link"></i>
						</div>
					</div>
					<div class="card__content">
						<div class="card__align">
							<div class="card__big-text">
								12
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="grid__col-4 card__wrapper">
				<div class="card card--red">
					<div class="card__header">
						<div class="card__title">Total Closed Tickets</div>
						<div class="card__tools">
							<i class="fa fa-external-link"></i>
						</div>
					</div>
					<div class="card__content">
						<div class="card__align">
							<div class="card__big-text">
								50
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="grid__row">
			<div class="grid__col-12 card__wrapper">

				<div class="card card--gray">
					<div class="card__header">
						<div class="card__title">Last Updated Tickets</div>
						<div class="card__tools">
							<i class="fa fa-external-link"></i>
						</div>
					</div>

					<div class="card__content">
						<table class="table">
							<thead class="table__head">
								<tr>
									<th class="table__sort--asc" sortable="true">#</th>
									<th class="table__sort--desc" sortable="true">Tracking-ID</th>
									<th>Title</th>
									<th>Status</th> 
                                    <th>Updated</th>
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

			

		</div>

	</div>
</article>
@endsection
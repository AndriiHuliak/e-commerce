@extends('layouts.admin')

@section('title')
	Orders
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header bg-primary">
						<h4>Order History
							<a href="{{ url('orders') }}" class="btn btn-warning float-right">New Orders</a>
						</h4>
					</div>
					<div class="card-body">
						<table class="table table-bordered">
							<thead>
								<th>Tracking Number</th>
								<th>Total Price</th>
								<th>Status</th>
								<th>Action</th>
							</thead>
							<tbody>
								@foreach($orders as $item)
		                            <tr>
		                            	<td>{{ $item->tracking_no }}</td>
		                            	<td>{{ $item->total_price }}</td>
		                            	<td>{{ $item->status == '0' ? 'pending' : 'completed' }}</td>
		                            	<td>
		                            		<a href="{{ url('admin/view-order/'.$item->id) }}" class="btn btn-primary">View</a>
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
@endsection

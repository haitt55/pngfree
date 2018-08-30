@extends('admin.manage.master')
@section('current_listUser')
	current
@endsection
@section('content')
	<div class="row">
  		<div class="col-md-12">
  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">List all of users</div>
					
					<div class="panel-options">
						<!-- <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
						<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a> -->
					</div>
				</div>
  				<div class="panel-body">
  					<table class="table table-bordered table-striped">
  						<thead>
  							<tr>
	  							<th>No.</th>
	  							<th>Name</th>
	  							<th>Email</th>
	  							<th>Action</th>
	  						</tr>
	  						<tr>
	  							<th>
	  							</th>
	  							<form action="{{ route('admin.listUser') }}" method="GET">
		  							<th>
		  								<input class="form-control" type="" name="name" @if(isset($_GET['name'])) value="{{$_GET['name']}}" @endif>
		  							</th>
		  							<th>
		  								<input class="form-control" type="" name="email" @if(isset($_GET['email'])) value="{{$_GET['email']}}" @endif>
		  							</th>
		  							<th>
		  								<button type="submit" class="btn btn-primary">Search</button>
		  								<a href="{{ route('admin.listUser') }}" class="btn btn-info" role="button">Reset Search</a>
		  							</th>
	  							</form>
	  						</tr>
  						</thead>
  						<tbody>
  							@foreach($users as $key => $user)
  								<tr>
	  								<td>{{$key+1}}</td>
	  								<td>{{$user->name}}</td>
							        <td>{{$user->email}}</td>
							        <td>
							        	<button type="button" class="btn btn-danger">Delete</button>
							        	<button type="button" class="btn btn-success">Change status</button>
							        </td>
	  							</tr>
  							@endforeach
  						</tbody>
  					</table>
  					<div class="text-center">
  						{{ $users->links() }}
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
@endsection

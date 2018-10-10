<?php
use App\Models\User;
use Illuminate\Support\Facades\Session;
?>
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
  					<div id="success_message">
  						
  					</div>
  					@if(Session::has('success'))
						<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
					@endif
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
							        	<div style="width: 50%; float: left;">
							        		<select class="form-control change_status" user_id = "{{$user->id}}" url_send = "{{ route('admin.changeStatus') }}">
											 	<option value="">Change status</option>
											 	<option disabled>Loai 1(30DL/ngay)</option>
											 	@foreach($allStatus[User::TYPE_1] as $key=>$val)
											 		<option value="{{$key}}" @if($user->payment_id == $key) selected @endif>&nbsp&nbsp&nbsp{{$val}}</option>
											 	@endforeach
											 	<option disabled>Loai 2(50DL/ngay)</option>
											 	@foreach($allStatus[User::TYPE_2] as $key=>$val)
											 		<option value="{{$key}}" @if($user->payment_id == $key) selected @endif>&nbsp&nbsp&nbsp{{$val}}</option>
											 	@endforeach
											</select>
							        	</div>
							        	
										<button style="margin-left: 8px;" type="button" class="btn btn-danger btn_delete_user" user_id = "{{$user->id}}">Delete</button>
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

  	<div id="delete_confirm" class="modal fade" role="dialog">
	  	<div class="modal-dialog modal-sm">
	    <!-- Modal content-->
	    	<div class="modal-content">
		    	<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Do you want to delete this user?</h4>
				</div>
			    <div class="modal-body">
			        <form action="{{route('admin.deleteUser')}}" method="POST">
			        	@csrf
			        	
			        	<div class="text-center">
			        		<input type="hidden" name="user_id" id="user_id_delete" value="">
			        		<button type="submit" class="btn btn-danger">Delete</button>
			        	</div>
			        </form>
			    </div>
		    </div>
	  	</div>
	</div>
  	<script type="text/javascript">
  		$('.change_status').change(function() {
  			var user_id = $(this).attr('user_id');
  			var payment_id = $(this).val();
  			var url = $(this).attr('url_send');
  			$.ajax({
  				url: url,
  				type: "POST",
  				data: {
  					"_token":"{{ csrf_token() }}",
  					"user_id": user_id,
  					"payment_id": payment_id,
  				},
  				success: function(result){
  					var result = '<div class="alert alert-success " role="alert">Success! <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
		        	$("#success_message").html(result);
		    	}
			});
  			console.log($(this).attr('user_id'));
  		});

  		$('.btn_delete_user').click(function(){
  			var user_id = $(this).attr('user_id');
  			$('#user_id_delete').val(user_id);
  			$('#delete_confirm').modal('show');
  		});
  	</script>
@endsection

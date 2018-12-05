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
					<div class="panel-title">List all of images</div>
					
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
					<a class="btn btn-primary" href="{{ route('admin.image.create') }}" style="margin-bottom: 10px;">Create Image</a>
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
	  							<form action="" method="GET">
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

  						</tbody>
  					</table>
  					<div class="text-center">

  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

  	<script type="text/javascript">

  	</script>
@endsection

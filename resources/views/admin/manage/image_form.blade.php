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
                <div class="panel-title">create image</div>

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

                <form action="{{ route('admin.image.store') }}" class="form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label text-md-right">{{ __('Title') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    {{--<div class="form-group row">--}}
                        {{--<label for="title" class="col-sm-3 col-form-label text-md-right">{{ __('Title') }}</label>--}}

                        {{--<div class="col-md-6">--}}
                            {{--<input id="title" type="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>--}}

                            {{--@if ($errors->has('title'))--}}
                                {{--<span class="invalid-feedback" role="alert">--}}
                                    {{--<strong>{{ $errors->first('title') }}</strong>--}}
                                {{--</span>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    jpg <input type="file" name="jpg_file">
                    <button class="btn btn-primary" type="submit">ok</button>
                </form>
                <div class="text-center">

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

</script>
@endsection

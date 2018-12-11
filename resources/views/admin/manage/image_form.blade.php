<?php
use App\Models\User;
use Illuminate\Support\Facades\Session;
use App\Helpers\General;
$categories = General::getCategoryTree();
$tags = \App\Models\Tag::getAll();
?>
@extends('admin.manage.master')
@section('current_listUser')
current
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
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
                            <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required="true" autofocus>

                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label text-md-right">{{ __('Description') }}</label>
                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}">

                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category_id" class="col-sm-3 col-form-label text-md-right">{{ __('Category') }}</label>
                        <div class="col-md-6">
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $category1)
                                    <option value="{{$category1['id']}}" style="font-size: 24px; font-weight: 700;">{{$category1['name']}}</option>
                                    @if ($category1['childs'])
                                        @foreach ($category1['childs'] as $category2)
                                            <option value="{{$category2['id']}}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$category2['name']}}</option>
                                            @if ($category2['childs'])
                                                @foreach ($category2['childs'] as $category3)
                                                    <option value="{{$category3['id']}}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$category3['name']}}</option>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </select>

                            @if ($errors->has('category_id'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('category_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="thumb_file" class="col-sm-3 col-form-label text-md-right">{{ __('Thumb File') }}</label>
                        <div class="col-md-6">
                            <input type="file" name="thumb_file">

                            @if ($errors->has('thumb_file'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('thumb_file') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="png_file" class="col-sm-3 col-form-label text-md-right">{{ __('Png File') }}</label>
                        <div class="col-md-6">
                            <input type="file" name="png_file">

                            @if ($errors->has('png_file'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('png_file') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jpg_file" class="col-sm-3 col-form-label text-md-right">{{ __('Jpg File') }}</label>
                        <div class="col-md-6">
                            <input type="file" name="jpg_file">

                            @if ($errors->has('jpg_file'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('jpg_file') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="psd_file" class="col-sm-3 col-form-label text-md-right">{{ __('Psd File') }}</label>
                        <div class="col-md-6">
                            <input type="file" name="psd_file">

                            @if ($errors->has('psd_file'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('psd_file') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ai_file" class="col-sm-3 col-form-label text-md-right">{{ __('AI File') }}</label>
                        <div class="col-md-6">
                            <input type="file" name="ai_file">

                            @if ($errors->has('ai_file'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ai_file') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="eps_file" class="col-sm-3 col-form-label text-md-right">{{ __('EPS File') }}</label>
                        <div class="col-md-6">
                            <input type="file" name="eps_file">

                            @if ($errors->has('eps_file'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('eps_file') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ppt_file" class="col-sm-3 col-form-label text-md-right">{{ __('PPT File') }}</label>
                        <div class="col-md-6">
                            <input type="file" name="ppt_file">

                            @if ($errors->has('ppt_file'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('ppt_file') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="svg_file" class="col-sm-3 col-form-label text-md-right">{{ __('SVG File') }}</label>
                        <div class="col-md-6">
                            <input type="file" name="svg_file">

                            @if ($errors->has('svg_file'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('svg_file') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="meta_description" class="col-sm-3 col-form-label text-md-right">{{ __('Meta Description') }}</label>
                        <div class="col-md-6">
                            <input id="meta_description" type="text" class="form-control{{ $errors->has('meta_description') ? ' is-invalid' : '' }}" name="meta_description" value="{{ old('meta_description') }}">

                            @if ($errors->has('meta_description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('meta_description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="meta_keywords" class="col-sm-3 col-form-label text-md-right">{{ __('Meta Keywords') }}</label>
                        <div class="col-md-6">
                            <input id="meta_keywords" type="text" class="form-control{{ $errors->has('meta_keywords') ? ' is-invalid' : '' }}" name="meta_keywords" value="{{ old('meta_keywords') }}">

                            @if ($errors->has('meta_keywords'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('meta_keywords') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="meta_title" class="col-sm-3 col-form-label text-md-right">{{ __('Meta Title') }}</label>
                        <div class="col-md-6">
                            <input id="meta_title" type="text" class="form-control{{ $errors->has('meta_title') ? ' is-invalid' : '' }}" name="meta_title" value="{{ old('meta_title') }}">

                            @if ($errors->has('meta_title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('meta_title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tag_id" class="col-sm-3 col-form-label text-md-right">{{ __('Tags') }}</label>
                        <div class="col-md-6">
                            <select name="tag_id[]" id="tags" class="form-control" multiple>
                                @foreach($tags as $key => $tag)
                                    <option value="{{ $key }}">{{ $tag }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Save</button>
                </form>
                <div class="text-center">

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $('#tags').select2({
        tags: true,
        multiple: true,
        tokenSeparators: [',']
    });
</script>
@endsection

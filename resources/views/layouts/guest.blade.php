<?php
/**
Layout for guest, content padding
*/
?><!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.includes.head_css')
    </head>
    <body class="@yield('css_class_content') not-logged">
        @include('layouts.partials.header')
        <div class="bg-gray content-main">
		    <div class="container-fluid py-4">
		        <div class="row">
		            <div class="col-md-12">
        				@yield('content')
        			</div>
    			</div>
    		</div>
    	</div>
        @include('layouts.partials.footer')
        @include('layouts.includes.foot_js')
    </body>
</html>

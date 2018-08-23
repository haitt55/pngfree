<?php
/**
Layout for user logged full sidebar filter
avatar left, logo center , menu right
*/
?><!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.includes.head_css')
    </head>
    <body class="bg-gray @yield('css_class_content') is_logged">
        @include('layouts.partials.header_info')
        <div class="content-main">
		        <div class="container-fluid py-md-4">
              <div class="row">
                <div class="col-12">
                  @yield('addition_row')
                </div>
              </div>
  		        <div class="row">
  		            <div class="col-md-4 col-xl-3">
  		                @include('layouts.partials.sidebar')
  		            </div>
  		            <div class="col-md-8 col-xl-9 mt-3 mt-md-0">
            				@yield('content')
            			</div>
          		</div>
          	</div>
        </div>
        @include('layouts.partials.footer')
        @include('layouts.includes.foot_info_js')
    </body>
</html>

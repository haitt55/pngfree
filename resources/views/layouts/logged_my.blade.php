<?php
/**
Layout for user logged nopt sidebar
not avatar, logo left, menu right
*/
?><!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.includes.head_css')
    </head>
    <body>
        @include('layouts.partials.header_info', ['headerMy' => true])
		@yield('content')
        @include('layouts.partials.footer')
        @include('layouts.includes.foot_js')
    </body>
</html>

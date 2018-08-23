<?php
/**
Layout for guest, content full box - login+register
*/
?><!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.includes.head_css')
    </head>
    <body class="@yield('css_class_content')">
        <div id="wrapper" class="home ">
            @include('layouts.partials.header')
            @yield('content_before')
            <!-- v2 首页content -->
            <div id="content">
                @yield('content')
            </div>

            @yield('content_after')
        </div>
        @include('layouts.partials.footer')
        @include('layouts.partials.side_navigation')
        @include('layouts.includes.foot_js')
    </body>
</html>

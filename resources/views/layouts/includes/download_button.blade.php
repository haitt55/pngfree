<?php
use App\Models\Image;
?>
@if (is_array($image))
    @if($image && $image['png_link'])
    <a target="_blank" data-ga="{{ $image['id'] }}_PNG" rel="nofollow"
       href="{{ route('image.download') }}?id={{ $image['id'] }}&amp;type={{Image::TYPE_PNG}}"
       class="hs-downPng element-down-click">
        <i></i>PNG</a>
    @endif
    @if($image && $image['psd_link'])
    <a target="_blank" data-ga="{{ $image['id'] }}_PSD" rel="nofollow"
       href="{{ route('image.download') }}?id={{ $image['id'] }}&amp;type={{Image::TYPE_PSD}}"
       class="hs-downEps element-down-click">
        <i></i>PSD</a>
    @endif
    @if($image && $image['jpg_link'])
    <a target="_blank" rel="nofollow" href="{{ route('image.download') }}?id={{ $image['id'] }}&amp;type={{Image::TYPE_JPG}}"
       data-ga="{{ $image['id'] }}_JPG" class="hs-downPng element-down-click">
        <i></i>JPG</a>
    @endif
    @if($image && $image['eps_link'])
    <a target="_blank" data-ga="{{ $image['id'] }}_EPS" rel="nofollow" href="{{ route('image.download') }}?id={{ $image['id'] }}&amp;type={{Image::TYPE_EPS}}"
       class="hs-downEps element-down-click">
        <i></i>EPS</a>
    @endif
    @if($image && $image['ai_link'])
    <a target="_blank" data-ga="{{ $image['id'] }}_AI" rel="nofollow" href="{{ route('image.download') }}?id={{ $image['id'] }}&amp;type={{Image::TYPE_AI}}"
       class="hs-downEps element-down-click">
        <i></i>AI</a>
    @endif
    @if($image && $image['ppt_link'])
    <a target="_blank" rel="nofollow" data-ga="{{ $image['id'] }}_Down" href="{{ route('image.download') }}?id={{ $image['id'] }}&amp;type={{Image::TYPE_PPT}}"
       class="ppt-click btn-drown template-down-file down-rar-click ppt-down-file element-down-click"
       data-id="{{ $image['id'] }}"></a>
    @endif
    @if($image && $image['svg_link'])
    <a target="_blank" data-ga="{{ $image['id'] }}_SVG" rel="nofollow" href="{{ route('image.download') }}?id={{ $image['id'] }}&amp;type={{Image::TYPE_SVG}}"
       class="hs-downEps element-down-click">
        <i></i>SVG</a>
    @endif
@else
    @if($image && $image->png_link)
        <a target="_blank" data-ga="{{ $image->id }}_PNG" rel="nofollow"
           href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_PNG}}"
           class="hs-downPng element-down-click">
            <i></i>PNG</a>
    @endif
    @if($image && $image->psd_link)
        <a target="_blank" data-ga="{{ $image->id }}_PSD" rel="nofollow"
           href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_PSD}}"
           class="hs-downEps element-down-click">
            <i></i>PSD</a>
    @endif
    @if($image && $image->jpg_link)
        <a target="_blank" rel="nofollow" href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_JPG}}"
           data-ga="{{ $image->id }}_JPG" class="hs-downPng element-down-click">
            <i></i>JPG</a>
    @endif
    @if($image && $image->eps_link)
        <a target="_blank" data-ga="{{ $image->id }}_EPS" rel="nofollow" href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_EPS}}"
           class="hs-downEps element-down-click">
            <i></i>EPS</a>
    @endif
    @if($image && $image->ai_link)
        <a target="_blank" data-ga="{{ $image->id }}_AI" rel="nofollow" href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_AI}}"
           class="hs-downEps element-down-click">
            <i></i>AI</a>
    @endif
    @if($image && $image->ppt_link)
        <a target="_blank" rel="nofollow" data-ga="{{ $image->id }}_Down" href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_PPT}}"
           class="ppt-click btn-drown template-down-file down-rar-click ppt-down-file element-down-click"
           data-id="{{ $image->id }}"></a>
    @endif
    @if($image && $image->svg_link)
        <a target="_blank" data-ga="{{ $image->id }}_SVG" rel="nofollow" href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_SVG}}"
           class="hs-downEps element-down-click">
            <i></i>SVG</a>
    @endif
@endif
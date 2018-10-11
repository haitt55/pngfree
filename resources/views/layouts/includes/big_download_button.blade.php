<?php
use App\Models\Image;
?>
@if($image && $image->png_link)
    <a target="_blank" rel="nofollow" href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_PNG}}" data-type="{{Image::TYPE_PNG}}"
       class="fl-l btn-downjpg element-down-click"> <i class="iconfont icon-xiazai"></i> PNG</a>
@endif
@if($image && $image->psd_link)
    <a target="_blank" rel="nofollow" href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_PSD}}"
       class="fl-l btn-downeps element-down-click"> <i class="iconfont icon-xiazai"></i> PSD</a>
@endif
@if($image && $image->jpg_link)
    <a target="_blank" rel="nofollow" href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_JPG}}"
       class="fl-l btn-downeps element-down-click"> <i class="iconfont icon-xiazai"></i> JPG</a>
@endif
@if($image && $image->eps_link)
    <a target="_blank" rel="nofollow" href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_EPS}}"
       class="fl-l btn-downeps element-down-click"> <i class="iconfont icon-xiazai"></i> EPS</a>
@endif
@if($image && $image->ai_link)
    <a target="_blank" rel="nofollow" href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_AI}}"
       class="fl-l btn-downeps element-down-click"> <i class="iconfont icon-xiazai"></i> AI</a>
@endif
@if($image && $image->ppt_link)
    <a target="_blank" rel="nofollow" href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_PPT}}"
       class="fl-l btn-downeps element-down-click"> <i class="iconfont icon-xiazai"></i> PPT</a>
@endif
@if($image && $image->svg_link)
    <a target="_blank" rel="nofollow" href="{{ route('image.download') }}?id={{ $image->id }}&amp;type={{Image::TYPE_SVG}}"
       class="fl-l btn-downeps element-down-click"> <i class="iconfont icon-xiazai"></i> SVG</a>
@endif
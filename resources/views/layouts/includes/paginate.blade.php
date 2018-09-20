{{--<div class='pageList'>--}}
    {{--<div class='pageCont'>--}}
        {{--<a href='javascript:void(0);' class='prevPage '><i></i></a> <a--}}
                {{--href='javascript:void(0);' class='on'>1</a> <a rel='nofollow'--}}
                                                               {{--href='free-graphic-design/2.html'>2</a> <a--}}
                {{--rel='nofollow' href='free-graphic-design/3.html'>3</a> <a rel='nofollow'--}}
                                                                          {{--href='free-graphic-design/4.html'>4</a>--}}
        {{--<a rel='nofollow' href='free-graphic-design/5.html'>5</a> <a rel='nofollow'--}}
                                                                     {{--href='free-graphic-design/6.html'>6</a>--}}
        {{--<a rel='nofollow' href='free-graphic-design/7.html'>7</a> <a rel='nofollow'--}}
                                                                     {{--href='free-graphic-design/8.html'>8</a>--}}
        {{--<span>…</span> --}}
        {{--<a rel='nofollow' href='free-graphic-design/200.html'>200</a> --}}
        {{--<a rel='nofollow'--}}
                                                                                        {{--href='free-graphic-design/2.html'--}}
                                                                                        {{--class='nextPage '><i></i></a>--}}
    {{--</div>--}}
{{--</div>--}}

@if ($paginator->hasPages())
<!-- Pagination -->
<div class="pageList">
    <div class="pageCont">
        <ul class="pagination">
            <!-- Previous Page Link -->
            @if ($paginator->onFirstPage())
                <li class="disabled"><span>&laquo;</span></li>
            @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
            @endif

            <!-- Pagination Elements -->
            @foreach ($elements as $element)
                    <!-- "Three Dots" Separator -->
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
                @endif

                <!-- Array Of Links -->
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            <!-- Next Page Link -->
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
            @else
                <li class="disabled"><span>&raquo;</span></li>
            @endif
        </ul>
    </div>
</div>
<!-- Pagination -->
@endif
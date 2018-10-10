<form class="sb-form clearfix" method="GET" action="{{ route('search') }}" id="search-form">
    <input class="sb-input fl-l comment-search-keyword-box-input" placeholder="Search Graphic Design" type="text" name="keyword" />
    <a class="sb-btn fl-l search-box-input-index" href="javascript:" onclick="document.getElementById('search-form').submit()">
        <i></i>
    </a>
    <div class="search-dropdown-wrap comment-search-dropdown-wrap" id="search-dropdown-wrap">
        <div class="search-dropdown">
        </div>
    </div>
</form>
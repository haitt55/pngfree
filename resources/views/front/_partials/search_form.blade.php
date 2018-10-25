<div class="sb-items search-type">
    @foreach ($parentCategories as $category)
    	<a href="javascript:;" class="{{ isset($categorySelectedId) && $categorySelectedId == $category->id ? 'on' : (!isset($categorySelectedId) && $loop->first ? 'on' : '') }}" data-type='{{ $category['id'] }}'>{{ $category['name'] }}</a>
    @endforeach
</div>
<form class="sb-form clearfix" method="GET" action="{{ route('search') }}" id="search-form">
    <input class="sb-input fl-l comment-search-keyword-box-input" placeholder="Search {{ isset($categorySelected) ? ucfirst(strtolower($categorySelected->name)) : 'Graphic design' }}" type="text" name="keyword" value="{{ isset($keyword) ? $keyword : '' }}" />
    <input type="hidden" name="category" value="{{ isset($queryStrings['category']) ? $queryStrings['category'] : (isset($parentCategories[0]) ? $parentCategories[0]->id : '') }}">
    <a class="sb-btn fl-l search-box-input-index" href="javascript:" onclick="document.getElementById('search-form').submit()">
        <i></i>
    </a>
    <div class="search-dropdown-wrap comment-search-dropdown-wrap" id="search-dropdown-wrap">
        <div class="search-dropdown">
        </div>
    </div>
</form>
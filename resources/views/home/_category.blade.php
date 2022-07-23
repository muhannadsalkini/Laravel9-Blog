@php
    $parentCategories = $mainCategories= \App\Http\Controllers\HomeController::maincategorylist();
@endphp

@foreach ($parentCategories as $rs)

        <li>
          <a class="dropdown-item" href="{{ route('categoryplaces', ['id' => $rs->id , 'slug' => $rs->slug]) }}">{{ $rs->title }}</a>
        @if (count($rs->children))
        <ul class="submenu dropdown-menu">
            @include('home._category_tree',['children' => $rs->children])
        </ul>

        @endif
        </li>


@endforeach

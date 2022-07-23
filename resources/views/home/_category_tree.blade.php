@foreach ($children as $subcategory)

            @if (count($subcategory->children))
            <li>
                {{-- <li><a href="{{ route('categoryplaces', ['id' => $subcategory->id , 'slug' => $subcategory->title]) }}">{{ $subcategory->title }}</a></li>
                <ul class=" dropdown-menu dropright">
                        @include('home._category_tree', ['children' => $subcategory->children])
                </ul> --}}
                <li><a href="{{ route('categoryplaces', ['id' => $subcategory->id , 'slug' => $subcategory->title]) }}">{{ $subcategory->title }}</a></li>
                <ul class="submenu dropdown-menu">
                    @include('home._category_tree', ['children' => $subcategory->children])
                </ul>
            </li>
            @else
                <li><a href="{{ route('categoryplaces', ['id' => $subcategory->id , 'slug' => $subcategory->title]) }}">{{ $subcategory->title }}</a></li>
            @endif

@endforeach
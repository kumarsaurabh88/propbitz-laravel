                                               
@if ($paginator->hasPages())

   
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="" class="disabled" ><li class="fas fa-angle-left previous"></li></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev"><li class="fas fa-angle-left previous"></li></a>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="list-inline-item number">{{ $element }}</li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                       <a href="" class="active" > <li class="item">{{ $page }}</li></a>
                    @else
                        <a href="{{ $url }}"><li class="">{{ $page }}</li></a>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next"><li class="fas fa-angle-right next"></li></a>
        @else
           <a href="" class="disabled" > <li class="fas fa-angle-right next disabled"></li></a>
        @endif
    
    
@endif

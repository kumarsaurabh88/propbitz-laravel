                                               
@if ($paginator->hasPages())

    <ul class="list-unstyled mb-0">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="list-inline-item previous"><a href="" class="disabled" >Previous</a></li>
        @else
            <li class="list-inline-item previous"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a></li>
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
                        <li class="list-inline-item number active "><a href="" class="active" >{{ $page }}</a></li>
                    @else
                        <li class="list-inline-item number"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="list-inline-item next"><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a></li>
        @else
            <li class="list-inline-item next disabled"><a href="" class="disabled" >Next</a></li>
        @endif
    </ul>
    
@endif

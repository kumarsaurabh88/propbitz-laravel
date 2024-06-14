@if ($paginator->hasPages())
    <span> {{$paginator->firstItem()}} - {{$paginator->lastItem()}} of {{$paginator->total()}}</span>
    @if($paginator->onFirstPage())
        <a href="javascript:void(0)"  class="disabled newer-older"><i class="fas fa-chevron-left" title="Newer"></i></a>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="newer-older" ><i class="fas fa-chevron-left" title="Newer"></i></a>
    @endif

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="newer-older"><i class="fas fa-chevron-right" title="Older"></i></a>
    @else
        <a href="javascript:void(0)"  class="disabled newer-older"> <i class="fas fa-chevron-right" title="Older"></i></a>
    @endif
@endif

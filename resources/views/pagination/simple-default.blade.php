<ul class="pagination pagination-sm m-0" role="navigation">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <a class="page-link">
                @lang('pagination.previous')
            </a>
        </li>
    @else
        <li class="page-item">
            <a href="{{ $paginator->previousPageUrl() }}" class="page-link">
                @lang('pagination.previous')
            </a>
        </li>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li class="page-item">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link">
                @lang('pagination.next')
            </a>
        </li>
    @else
        <li class="page-item disabled">
            <a class="page-link">
                @lang('pagination.next')
            </a>
        </li>
    @endif
</ul>

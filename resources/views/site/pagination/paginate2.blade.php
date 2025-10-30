
@if ($paginator->hasPages())

    <nav aria-label="Pagination" class="uk-margin-large uk-text-center">
        <ul class="uk-pagination uk-margin-remove-bottom uk-flex-center" uk-margin>
            @if (!$paginator->onFirstPage())
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" aria-label="Trước">
                        <span uk-pagination-previous></span>
                    </a>
                </li>
            @endif

                @foreach ($elements as $element)
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="uk-active"><span aria-current="page">{{ $page }}</span></li>
                            @else
                                <li>
                                    <a href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach


                @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}" aria-label="Tiếp theo">
                            <span uk-pagination-next></span>
                        </a>
                    </li>
                @endif




        </ul>
    </nav>

@endif


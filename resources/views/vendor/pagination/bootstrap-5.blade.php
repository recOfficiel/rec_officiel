@if ($paginator->hasPages())
    <!-- Bootstrap CSS -->
      <style>
        /* Style personnalisé pour la pagination */
        .pagination-custom {
            --primary: #293070;
            --primary-light: #3a3d8a;
            --primary-dark: #1e2255;
        }

        .pagination-custom .page-link {
            color: var(--primary);
            border: 1px solid #dee2e6;
            transition: all 0.3s ease;
            min-width: 45px;
            text-align: center;
            margin: 0 2px;
        }

        .pagination-custom .page-link:hover {
            color: white;
            background-color: var(--primary-light);
            border-color: var(--primary);
        }

        .pagination-custom .page-item.active .page-link {
            background-color: var(--primary);
            border-color: var(--primary);
            color: white;
        }

        .pagination-custom .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .pagination-custom .page-link {
                padding: 0.375rem 0.5rem;
                min-width: 36px;
            }
        }
    </style>

    <!-- Pagination -->
    <nav aria-label="Page navigation" class="mt-4 mb-5">
        <ul class="pagination pagination-custom justify-content-center flex-wrap">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">«</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                    </a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">
                        <span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">»</span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">»</span>
                </li>
            @endif
        </ul>
    </nav>


@endif

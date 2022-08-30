@if ($paginator->hasPages())
    <div class="row">
        <div class="col-12">
            <div class="cpagination padding5050">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        @if (!$paginator->onFirstPage())
                            <li class="page-item">
                                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"> <span aria-hidden="true"><i class="fas fa-caret-left"></i></span>
                                </a>
                            </li>
                        @endif

                        @if ($paginator->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next"> <span aria-hidden="true"><i class="fas fa-caret-right"></i></span>
                                </a>
                            </li>
                        @endif

                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endif

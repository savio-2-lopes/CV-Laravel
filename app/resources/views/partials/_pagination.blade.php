<nav class="d-flex align-items-center justify-content-center">
    <ul class="pagination pagination-lg">
        <li class="page-item">
            <a class="page-link" href="#">
                {{ $first }}
            </a>
        </li>

        @for ($i = 1; $i < $total; $i++)
            <li class="page-item">
                <a class="page-link" href="#">
                    {{ $i }}
                </a>
            </li>
        @endfor
        <li class="page-item">
            <a class="page-link" href="#">
                {{ $last }}
            </a>
        </li>
    </ul>
</nav>

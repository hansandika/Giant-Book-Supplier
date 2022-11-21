<footer class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; Happy Book Store 2022</p>

    <a href="/"
        class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="{{ route('books.index') }}" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="{{ route('publishers.index') }}" class="nav-link px-2 text-muted">Publisher</a>
        </li>
        <li class="nav-item"><a href="{{ route('contacts.index') }}" class="nav-link px-2 text-muted">Contact</a></li>
    </ul>
</footer>

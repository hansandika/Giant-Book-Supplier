<x-app-layout title="Publisher">
    <div class="container">
        <form class="d-flex" action="{{ route('publishers.index') }}" method="GET">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-secondary" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor"
                    class="bi bi-search" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </form>
        <div class="w-full bg-white mt-4">
            <div class="row gap-2">
                @forelse ($publishers as $publisher)
                    <div class="col-sm-3 p-3" style="width: 250px;height: 330px">
                        <a href="{{ route('publishers.show', $publisher->id) }}" class="text-decoration-none text-dark">
                            <div class="border border-2 p-3">
                                <img style="width:220px; height: 220px; object-fit: cover" class="img-thumbnail"
                                    src="{{ $publisher->image }}" alt="Card image cap">
                                <div class="p-2">
                                    <div class="fw-medium">
                                        {{ Str::limit($publisher->name, 18) }}
                                    </div>
                                    <div class="fw-semibold">
                                        {{ Str::limit($publisher->address, 18) }}
                                    </div>
                                    <div class="w-100">
                                        {{ Str::limit($publisher->phone, 18) }}
                                    </div>
                                    <div class="w-100">
                                        {{ Str::limit($publisher->email, 15) }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="text-danger p-3">
                        No Publisher
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>

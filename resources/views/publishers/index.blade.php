<x-app-layout title="Publisher">
    <div class="container">
        <form class="d-flex" action="{{ route('publishers.index') }}" method="GET">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-secondary" type="submit">
                <i class="bi bi-search"></i>
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

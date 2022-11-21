<x-app-layout title="{{ $publisher->name }}">
    <img style="width:100%, object-fit: cover;" class="img-thumbnail mb-3" src="{{ $publisher->image }}"
        alt="Card image
    cap">
    <div class="text-dark fs-3 fw-bold">
        {{ $publisher->name }}
    </div>
    <div class="mt-3">
        <div class="d-flex">
            <div class="opacity-75" style="width:120px;">
                Name
            </div>
            <div class="w-100">
                <p>{{ $publisher->name }}</p>
            </div>
        </div>
        <div class="d-flex">
            <div class="opacity-75" style="width:120px;">
                Address
            </div>
            <div class="w-100">
                <p>
                    {{ $publisher->address }}
                </p>
            </div>
        </div>
        <div class="d-flex">
            <div class="opacity-75" style="width:120px;">
                Phone
            </div>
            <div class="w-100">
                <p>
                    {{ $publisher->phone }}
                </p>
            </div>
        </div>
        <div class="d-flex">
            <div class="opacity-75" style="width:120px;">
                Email
            </div>
            <div class="w-100">
                <p>
                    {{ $publisher->email }}
                </p>
            </div>
        </div>
    </div>
    <div class="mt-3">
        <div class="text-dark fs-3 fw-bold">
            Book Collection
        </div>
        <div class="d-flex overflow-auto gap-2">
            @forelse ($publisher->books as $book)
                <a href="{{ route('books.show', $book->id) }}" class="text-decoration-none text-dark">
                    <div class="p-3">
                        <div class="border border-2 p-3" style="width: 220px; height: 330px">
                            <img style="width:220px; height: 220px; object-fit: cover" class="img-thumbnail"
                                src="{{ $book->image }}" alt="Card image cap">
                            <div class="p-2">
                                <div class="fw-medium">
                                    {{ Str::limit($book->title, 15) }}
                                </div>
                                <div class="fw-semibold">
                                    by {{ $book->author }}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @empty
                <div class="text-danger p-3">
                    No Book
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>

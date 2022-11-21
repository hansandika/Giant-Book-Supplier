<x-app-layout title='{{ $book->title }}'>
    <img style="width:100%, object-fit: cover;" class="img-thumbnail mb-3" src="{{ $book->image }}" alt="Card image cap">
    <div class="text-dark fs-3 fw-bold">
        {{ $book->title }}
    </div>
    <div class="mt-3">
        <div class="d-flex">
            <div class="opacity-75" style="width:120px;">
                Title
            </div>
            <div class="w-100">
                <p>{{ $book->title }}</p>
            </div>
        </div>
        <div class="d-flex">
            <div class="opacity-75" style="width:120px;">
                Author
            </div>
            <div class="w-100">
                <p>
                    by Author {{ $book->author }}
                </p>
            </div>
        </div>
        <div class="d-flex">
            <div class="opacity-75" style="width:120px;">
                Category
            </div>
            <div class="w-100 d-flex gap-2">
                @foreach ($book->categories as $category)
                    <h4><span class="badge bg-primary">{{ $category->name }}</span></h4>
                @endforeach
            </div>
        </div>
        <div class="d-flex">
            <div class="opacity-75" style="width:120px;">
                Year
            </div>
            <div class="w-100">
                <p>
                    {{ $book->year }}
                </p>
            </div>
        </div>
        <div class="d-flex">
            <div class="opacity-75" style="width:120px;">
                Publisher
            </div>
            <div class="w-100">
                <p>
                    {{ $book->publisher->name }}
                </p>
            </div>
        </div>
        <div class="d-flex">
            <div class="opacity-75" style="width:120px;">
                Synopsis
            </div>
            <div class="w-100">
                <p>{{ $book->synopsis }}</p>
            </div>
        </div>
    </div>
</x-app-layout>

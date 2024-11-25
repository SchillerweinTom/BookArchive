@extends('layout.app')

@section('title', 'My Books')

@section('content')

<article class="detail-book row py-3 px-1 rounded-4">
    <div class="col-md-4">
        <figure>
            @if($book->image)
                <img
                    src="{{ asset('images/' . $book->image)  }}" alt="{{ $book->title }}" class="rounded">
            @else
                <img src="{{ asset('images/no-cover.webp') }}" alt="Cover Image" class="rounded">
            @endif
        </figure>
    </div>
    <div class="col-md-4">
        <h2 class="mb-3">{{$book->title}}</h2>
        <div>
            <p>{{$book->description}}</p>
        </div>
        <div class="border-top mt-2 pt-3">
            <span class="badge text-bg-secondary">{{$book->author->name}}</span>
            <span class="badge text-bg-secondary">{{$book->category->name}}</span>
            <span class="badge text-bg-secondary">{{$book->pages}}</span>

        </div>
    </div>
</article>
@endsection

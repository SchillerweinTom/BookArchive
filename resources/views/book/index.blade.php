@extends('layout.app')

@section('title', 'My Books')

@section('content')

    <h2 class="mt-5 mb-4">My Books <a href="{{route('book.create')}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i></a></h2>

    <section class="row">
        <div class="col-md-12">
            <div class="list-book">
                @foreach($books as $book)
                    <article class="card border-0 mb-3">
                        <div class="card-body spacing-items">
                            <div>
                                <h3 class="card-title card-trunc">{{ $book->title }}</h3>
                                <div>by {{ $book->author->name }}</div>
                                <div class="mt-2">
                                    <span class="badge text-bg-secondary">{{ $book->category->name }}</span>
                                </div>
                            </div>
                            <div class="btn-group mt-3 d-flex justify-content-center mb-0" role="group">
                                <a href="{{ route('book.show', $book->id) }}" class="btn btn-light flex-fill"><i class="bi bi-eye"></i></a>
                                <a href="{{ route('book.edit', $book->id) }}" class="btn btn-light flex-fill"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('book.delete', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure? You are about to delete a book!')" class="d-flex flex-fill">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-light w-100"><i class="bi bi-trash3"></i></button>
                                </form>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection


@extends('layout.app')

@section('title', 'Authors')

@section('content')

    <h2 class="mt-5 mb-4">Authors <a href="{{route('author.create')}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i></a></h2>
    <div class="col-md-6">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col" class="w-auto">#</th>
                <th scope="col" class="w-50">Author</th>
                <th scope="col" class="w-25">Birth Date</th>
                <th scope="col" class="w-auto text-end">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($authors as $author)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $author->name }}</td>
                    <td class="align-middle">{{ \Carbon\Carbon::parse($author->birthday)->format('d F Y') }}</td>
                    <td class="text-end">
                            <a href="{{ route('author.edit', $author->id) }}" class="btn btn-edit"><i class="bi bi-pencil"></i></a>
                            <form action="{{ route('author.delete', $author->id) }}" method="POST" onsubmit="return confirm('Are you sure? You are about to delete an author!')" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete"><i class="bi bi-trash3"></i></button>
                            </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@extends('layout.app')

@section('title', 'Categories')

@section('content')

    <h2 class="mt-5 mb-4">Categories
        <a href="{{ route('category.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i></a>
    </h2>

    <div class="col-md-6">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col" class="w-auto">#</th>
                <th scope="col" class="w-50">Category</th>
                <th scope="col" class="w-auto text-end">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $category->name }}</td>
                    <td class="text-end">
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-edit"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('category.delete', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure? You are about to delete this category!')" class="d-inline">
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

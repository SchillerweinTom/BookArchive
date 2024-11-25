@extends('layout.app')

@section('title', 'Add Book')

@section('content')
    <section class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="my-4">Add a Book</h2>

            <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control w-75" value="{{ old('title') }}">
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="w-100 d-flex align-items-center justify-content-between">
                        <label for="description" class="form-label">Description</label>
                        <p class="small text-end m-0">(optional)</p>
                    </div>
                    <textarea id="description" name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                    <small class="text-muted">Max 800 characters</small>
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="w-25 d-flex align-items-center justify-content-between">
                        <label for="pages" class="form-label">Pages</label>
                        <p class="small text-end m-0">(optional)</p>
                    </div>
                    <input type="number" id="pages" name="pages" class="form-control w-25" value="{{ old('pages') }}" min="1">
                    @error('pages')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="w-50 d-flex align-items-center justify-content-between">
                        <label for="image" class="form-label">Image</label>
                        <p class="small text-end m-0">(optional)</p>
                    </div>
                    <input type="file" id="image" name="image" class="form-control w-50">
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="author_id" class="form-label">Author</label>
                    <select id="author_id" name="author_id" class="form-select w-50" >
                        <option value="" disabled selected>Select an author</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('author_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select id="category_id" name="category_id" class="form-select w-50" >
                        <option value="" disabled selected>Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-start mt-4">
                    <button type="submit" class="btn btn-primary me-2">Save Book</button>
                    <a href="{{ route('book.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection

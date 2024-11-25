@extends('layout.app')

@section('title', 'Add Category')

@section('content')
    <section class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="my-4">Add Category</h2>
            <form action="{{ route('category.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" id="name" name="name" class="form-control w-50" value="{{ old('name') }}">
                    @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-start mt-4">
                    <button type="submit" class="btn btn-primary me-2">Save Category</button>
                    <a href="{{ route('category.index') }}" class="btn btn-light ">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection

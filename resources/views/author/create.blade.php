@extends('layout.app')

@section('title', 'Add Author')

@section('content')
    <section class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="my-4">Add an Author</h2>

            <form action="{{ route('author.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Author Name</label>
                    <input type="text" id="name" name="name" class="form-control w-50" value="{{ old('name') }}">
                    @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="w-25 d-flex align-items-center justify-content-between">
                        <label for="birthday" class="form-label">Date of Birth</label>
                        <p class="small text-end m-0">(optional)</p>
                    </div>
                    <input type="date" id="birthday" name="birthday" class="form-control w-25" value="{{ old('birthday') }}">
                    @error('birthday')
                    <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-start mt-4">
                    <button type="submit" class="btn btn-primary me-2">Save Author</button>
                    <a href="{{ route('author.index') }}" class="btn btn-light">Cancel</a>
                </div>
            </form>
        </div>
    </section>
@endsection


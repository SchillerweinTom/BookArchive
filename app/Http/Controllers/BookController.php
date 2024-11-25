<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $books = Book::with('author', 'category')->get();
        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('book.create', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $uniqueName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $imagePath = public_path('images\\' . $uniqueName);

            $manager = new ImageManager(Driver::class);

            $manager->read($file)
                ->cover(400, 520)
                ->save($imagePath);

            $validated['image'] = $uniqueName;
        }

        Book::create($validated);

        return redirect()->route('book.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book): View
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): View
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('book.edit', compact('book', 'authors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, Book $book): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            $uniqueName = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $imagePath = public_path('images\\' . $uniqueName);

            $manager = new ImageManager(Driver::class);

            $manager->read($file)
                ->cover(400, 520)
                ->save($imagePath);

            $validated['image'] = $uniqueName;
        }

        $book->update($validated);

        return redirect()->route('book.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book): RedirectResponse
    {
        $book->delete();
        return redirect()->route('book.index')->with('success', 'Book deleted successfully.');
    }
}

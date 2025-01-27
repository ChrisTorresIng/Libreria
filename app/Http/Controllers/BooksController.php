<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBooksRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(3);
        return view('modules/cliente/libro', compact('books'));
    }

    public function inventario()
    {
        $books = Book::paginate(3);
        return view('modules/empleado/registroBooks', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules/empleado/registroBooks-crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBooksRequest $request)
    {
        $book = Book::create($request->all());
        return redirect()->route('books.inventario')->with('success', 'El libro registrado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('modules/cliente/libro-comprar', compact('book'));
    }

    public function search(request $request, Book $book)
    {
        $books = Book::where('title', 'like', '%' . $request->title . '%')
            ->where('autor', 'like', '%' . $request->autor . '%')
            ->get();
        return view('modules/cliente/libro-show', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('modules/empleado/registroBooks-editar', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => "required|string|max:200|unique:books,title,{$book->id}",
            'autor' => 'required|string|max:50',
            'publication_year' => 'required',
            'description' => "required|string|max:200|unique:books,description,{$book->id}",
            'category' => 'required',
            'language' => 'required',
            'front_page' => 'required',
        ]);

        $book->update($request->all());
        return redirect()->route('books.inventario')->with('success', 'El libro ' . $book->title . ' se actualizo correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.inventario')->with('success', 'El libro ' . $book->title . ' se eliminó.');
    }
}

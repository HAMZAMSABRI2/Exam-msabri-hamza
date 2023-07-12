<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();

        return view('pages.liste' , compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:4',
            'author'=>'required|min:6',
            'published_date'=>'required',
            'description'=>'required|min:10',
            'cover_image'=>'required|mimes:png,jpeg,jpg,svg|max:10000'
        ]);

        $book = new Book();

        $book->user_id = Auth::id();

        $book->title = $request->title;

        $book->author = $request->author;

        $book->published_date = $request->published_date;

        $book->description = $request->description;



        if ($request->hasFile('cover_image')){
            $book->cover_image =$request->file('cover_image')->store('images');

        }

        $book->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);

        return view('pages.edit' , compact('book'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required|min:4',
            'author'=>'required|min:6',
            'published_date'=>'required',
            'description'=>'required|min:10',
            'cover_image'=>'required|mimes:png,jpeg,jpg,svg|max:10000'
        ]);

        $book = Book::find($id);

        $book->user_id = Auth::id();

        $book->title = $request->title;

        $book->author = $request->author;

        $book->published_date = $request->published_date;

        $book->description = $request->description;



        if ($request->hasFile('cover_image')){
            $book->cover_image =$request->file('cover_image')->store('images');

        }

        $book->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::destroy($id);

        return back();

        
        
    }
}

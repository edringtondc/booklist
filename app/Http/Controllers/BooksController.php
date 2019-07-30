<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Book;

// namespace
// use App\Book

// function to store all books and return all books view

// function to sort by author

// function to create a new book

// function to store book in database 
// title, author, picURL

// function to show book (singular)

// function to save book as toread/hasread

// function to delete book from list

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book:: orderBy('due_date', 'asc')->paginate(3);

        return view('books.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //  /books/create
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //    validate data
        $this->validate($request, [
            'name' => 'required|string|max:255|min:3' ,
            'description' => 'required|string|max:10000|min:10',
            'due_date' => 'required|date|'
        ]);
        //    create new Book

        $book = new Book;

        //     assign book data from request
        $book->name = $request->name;
        $book->description = $request->description;
        $book->due_date = $request->due_date;
        //    save book
            $book->save();
        //    flash session message with success
        Session::flash('success', 'Created Book Successfully');
        //    return a redirect

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //search the book with the id
        //return a view(show.blade.pho)
        //pass variable with return that contains the specific books.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $book->dueDateFormatting = false;

        return view('books.edit')->withBook($book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
             //    validate data
             $this->validate($request, [
                'name' => 'required|string|max:255|min:3' ,
                'description' => 'required|string|max:10000|min:10',
                'due_date' => 'required|date|'
            ]);

            //    find the related Book
            $book = Book::find($id);
    
            //     assign book data from request
            $book->name = $request->name;
            $book->description = $request->description;
            $book->due_date = $request->due_date;
            //    save book
                $book->save();
            //    flash session message with success
            Session::flash('success', 'Saved Book Successfully');
            //    return a redirect
    
            return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   //finding specific book by id
        $book = Book::find($id);

        //deleting the book
        $book->delete();

        //session message
        Session::flash('success', 'Deleted the book successfully');

        //returning a redirect to the index page
        return redirect()->route('book.index');
    }
}
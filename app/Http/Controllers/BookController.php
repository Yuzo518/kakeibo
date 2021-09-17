<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    function index(){
        # bookテーブルに入っているデータを全て取得する
        //$books = Book::all();
        # 使うビューファイルを指定
        # compactにはビューファイルに送るデータを選択
        $books = Auth::user()->books;
        return view("books.index",compact("books"));
    }

    function show(Book $book){
        # dd($book); dd関数の中の表示
        /*
        if($book->user_id != Auth::user()->id){
            return redirect()->route('books.index');
        }
        */
        //$this->checkMyData($book);
        if($this->checkMyData($book)){ return $this->checkMyData($book); }
        return view("books.show", compact("book"));
    }

    public function create(){
        return view("books.create");
    }

    public function store(Request $request){
        $book = new Book();
        $book->fill($request->all());
        $book->user_id = Auth::user()->id;
        /*
        $book->inout    = $request->input("inout");
        $book->year     = $request->input("year");
        $book->month    = $request->input("month");
        $book->category = $request->input("category");
        $book->amount   = $request->input("amount");
        $book->memo     = $request->input("memo");
        */
        $book->save();

        //return redirect()->route("books.show",$book);
        return redirect()->route("books.index");
    }

    public function edit(Book $book){
        if($this->checkMyData($book)){ return $this->checkMyData($book); }
        return view("books.edit",compact("book"));
    }

    public function update(Request $request, Book $book){
        if($this->checkMyData($book)){ return $this->checkMyData($book); }
        //$this->checkMyData($book);
        $book->fill($request->all());
        /*
        $book->inout    = $request->input("inout");
        $book->year     = $request->input("year");
        $book->month    = $request->input("month");
        $book->category = $request->input("category");
        $book->amount   = $request->input("amount");
        $book->memo     = $request->input("memo");
        */
        $book->save();

        return redirect()->route("books.show",$book);
    }

    public function destroy(Book $book){
        if($this->checkMyData($book)){ return $this->checkMyData($book); }
        //$this->checkMyData($book);
        $book->delete();
        return redirect()->route('books.index');
    }
    
    private function checkMyData(Book $book){
        if($book->user_id != Auth::user()->id){
            return redirect()->route('books.index');
        }
    }
}

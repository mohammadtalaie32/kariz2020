<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class AdminBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function is_inti($value){


        if (!filter_var($value, FILTER_VALIDATE_INT) === false and (int)$value > 0) {
            return true;
        } else {
            return false;
        }
    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminBookRequest $request)
    {
        //
        $input = $request->all();

        if(array_key_exists('picture', $input)) {
            $name = $request->file('picture')->getClientOriginalName();
            $name = basename($name);
            $request->file('picture')->move('images', $name);
            $input['picture'] = $name;
        }
        Book::create($input);
        return redirect('/admin/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        if($this->is_inti($id) == true){
        $book = Book::find($id);
        return view('admin.books.edit',compact('book'));
        }
        else{
            return redirect("/");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminBookRequest $request, $id)
    {
        //
        if($this->is_inti($id) == true){
        $book = Book::find($id);
        $input = $request->all();
        if(array_key_exists('picture',$input)) {
            $name = $request->file('picture')->getClientOriginalName();
            $name = basename($name);
            $request->file('picture')->move('images', $name);
            $input['picture'] = $name;
        }
        $book->update($input);
        return redirect('/admin/books');
        }
        else{
            return redirect("/");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if($this->is_inti($id) == true){
        $book  = Book::find($id);
//        if($book['picture'] != 'Null') {
//            unlink('images/' . $book->picture);
//        }
        $book->delete();
        return redirect('/admin/books');
        }
        else{
            return redirect("/");
        }
    }

    public function keyword($string1,$string2){
        similar_text($string1,$string2,$percent);
        if($percent >= 80){
            return true;
        }
        else{
            return false;
        }
    }

    public function search(Request $request){
        $request->validate(['searched_book'=>'required']);
        $input = $request->all();
        $books = Book::all();
        $searched_books = [];
        $i = 0;
        if($input['searched_book'] != null) {
            foreach ($books as $book) {
                if (str_contains($book['name'], $input['searched_book']) or   (str_contains($input['searched_book'],$book['name'])) or $this->keyword($input['searched_book'],$book['name'])) {
                    $searched_books[$i] = $book;
                    $i += 1;
                }
            }
            return view('admin.books.search',compact('searched_books'));
        }

        else {
            return view('admin.books.search', compact('searched_books'));
        }
    }
}

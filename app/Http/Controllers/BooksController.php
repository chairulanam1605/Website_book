<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function data()
    {
       $books = DB::table('books')->get();
       //return $books;
       //return view('books.data', ['books' => $books]);
       return view('books.data')->with('books', $books);
    }

    public function add()
    {
        return view('books.add');
    }
//add process
    public function addProcess(Request $request)
    {
        $books = DB::table('books');
        DB::table('books')->insert([
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'gambar' => $request->file('gambar')->store('gambar')
        ]);
        $request->session()->flash('status', 'Buku berhasil di tambah!');
        return view('books.data', [
            'books' => $books->get(),
        ]);
    }

    public function edit($id)
    {
        $book = DB::table('books')->where('id', $id)->first();
        return view('books/edit', compact('book'));
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('books')->where('id', $id)
        ->update([
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'gambar' => $request->file('gambar')->store('gambar')
        ]);
        return redirect('books')->with('status', 'Buku Berhasil diupdate!');
    }

    public function delete( $id)
    {
        DB::table('books')->where('id', $id)->delete();
        return redirect('books')->with('status', 'Buku Berhasil dihapus!');
    }
}

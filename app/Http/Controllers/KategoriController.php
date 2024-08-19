<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategories = Kategori::orderby('created_at', 'DESC')->get();
        // dd($students->toArray());
        return view('kategori.index',compact('kategories'));
    }

    // Show the form for creating a new category
    public function create()
    {
        return view('kategori.create');
    }

    // Store a newly created category in the database
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategori,nama_kategori',
        ]);
        Kategori::create([
            'nama_kategori' => $request->input('nama_kategori'),
        ]);
        return redirect()->route('kategori.index')->with('success', 'Category created successfully.');
    }
    

    // Show the form for editing a specific category
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', compact('kategori'));
    }
    


    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);
        $kategori->update($request->all());
        return redirect()->route('kategori.index')->with('success', 'Category updated successfully');
    }
    

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Category deleted successfully');
    }

}


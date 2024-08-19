<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluarans = Pengeluaran::orderBy('created_at', 'DESC')->get();
        return view('pengeluaran.index', compact('pengeluarans'));
    }

    // Show the form for creating a new pengeluaran
    public function create()
    {
        return view('pengeluaran.create');
    }

    // Store a newly created pengeluaran in the database
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required',
            'nominal' => 'required|numeric',
        ]);

        Pengeluaran::create([
            'deskripsi' => $request->input('deskripsi'),
            'nominal' => $request->input('nominal'),
        ]);

        return redirect()->route('pengeluaran.index')->with('success', 'Expense created successfully.');
    }

    // Show the form for editing a specific pengeluaran
    public function edit(Pengeluaran $pengeluaran)
    {
        return view('pengeluaran.edit', compact('pengeluaran'));
    }

    // Update a specific pengeluaran in the database
    public function update(Request $request, Pengeluaran $pengeluaran)
    {
        $request->validate([
            'nama_pengeluaran' => 'required|string|max:255',
            'nominal' => 'required|numeric',
        ]);

        $pengeluaran->update($request->all());

        return redirect()->route('pengeluaran.index')->with('success', 'Expense updated successfully.');
    }

    // Delete a specific pengeluaran from the database
    public function destroy(Pengeluaran $pengeluaran)
    {
        $pengeluaran->delete();

        return redirect()->route('pengeluaran.index')->with('success', 'Expense deleted successfully.');
    }
}

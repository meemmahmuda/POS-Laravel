<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    // Display a listing of the suppliers
    public function index()
    {
        $suppliers = Supplier::orderby('created_at', 'DESC')->get();
        return view('supplier.index', compact('suppliers'));
    }

    // Show the form for creating a new supplier
    public function create()
    {
        return view('supplier.create');
    }

    // Store a newly created supplier in the database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Supplier::create([
            'nama' => $request->input('nama'),
            'id_supplier' => $request->input('id_supplier'),
            'telepon' => $request->input('telepon'),
            'alamat' => $request->input('alamat'),
        ]);

        return redirect()->route('supplier.index')->with('success', 'Supplier created successfully.');
    }

    // Show the form for editing a specific supplier
    public function edit(Supplier $supplier)
    {
        return view('supplier.edit', compact('supplier'));
    }

    // Update the specified supplier in the database
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $supplier->update($request->all());

        return redirect()->route('supplier.index')->with('success', 'Supplier updated successfully');
    }

    // Remove the specified supplier from the database
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('supplier.index')->with('success', 'Supplier deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderby('created_at', 'DESC')->get();
        return view('brand.index', compact('brands'));
    }

    // Show the form for creating a new brand
    public function create()
    {
        return view('brand.create');
    }

    // Store a newly created brand in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        Brand::create([
            'name' => $request->input('name'),
        ]);
        return redirect()->route('brand.index')->with('success', 'Brand created successfully.');
    }

    // Show the form for editing a specific brand
    public function edit(Brand $brand)
    {
        return view('brand.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $brand->update($request->all());
        return redirect()->route('brand.index')->with('success', 'Brand updated successfully');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brand.index')->with('success', 'Brand deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Show the list of products
    public function index()
    {
        $produks = Produk::orderby('created_at', 'DESC')->get();
        $kategori = Kategori::pluck('nama_kategori', 'id_kategori'); // Fetch categories as key-value pairs
        $brands = Brand::pluck('name', 'id'); // Fetch categories as key-value pairs
    
        return view('produk.index', compact('produks', 'kategori', 'brands'));
    }    

    // Show the form for creating a new product
    public function create()
    {
        $kategori = Kategori::pluck('nama_kategori', 'id_kategori');
        $brands = Brand::pluck('name', 'id');
        return view('produk.create', compact('kategori', 'brands'));
    }

    // Store a newly created product in the database
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'id_brand' => 'required|exists:brands,id',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'diskon' => 'nullable|numeric',
            'stok' => 'required|numeric',
            'merk' => 'nullable|string',
        ]);

        // Generate a new product code
        $latestProduk = Produk::latest('id_produk')->first();
        $newKodeProduk = 'P' . str_pad(($latestProduk ? $latestProduk->id_produk + 1 : 1), 6, '0', STR_PAD_LEFT);

        Produk::create(array_merge($request->all(), ['kode_produk' => $newKodeProduk]));

        return redirect()->route('produk.index')->with('success', 'Product created successfully.');
    }

    // Show the form for editing a specific product
    public function edit(Produk $produk)
    {
        $kategori = Kategori::pluck('nama_kategori', 'id_kategori');
        return view('produk.edit', compact('produk', 'kategori'));
    }    

    // Update a specific product in the database
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'diskon' => 'nullable|numeric',
            'stok' => 'required|numeric',
            'merk' => 'nullable|string',
        ]);

        $produk->update($request->all());

        return redirect()->route('produk.index')->with('success', 'Product updated successfully.');
    }

    // Remove the specified product from storage
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Product deleted successfully.');
    }
    
}

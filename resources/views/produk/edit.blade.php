@extends('layouts.master')

@section('title')
    Edit Product
@endsection

@section('breadcrumb')
    @parent
    <li><a href="{{ route('produk.index') }}">Product List</a></li>
    <li class="active">Edit Product</li>
@endsection

@section('content')

<div class="row" style="margin: 0;">
    <div class="col-lg-12">
        <div class="box" style="border-radius: 5px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
            <div class="box-header with-border" style="background-color: #f8f9fa; padding: 15px; border-bottom: 1px solid #ddd;">
                <h3 class="box-title">Edit Product</h3>
            </div>

            <div class="box-body" style="padding: 15px;">
                <form action="{{ route('produk.update', $produk->id_produk) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nama_produk">Product Name</label>
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{ old('nama_produk', $produk->nama_produk) }}" required>
                        @error('nama_produk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_kategori">Category</label>
                        <select name="id_kategori" id="id_kategori" class="form-control" required>
                            <option value="">Select Category</option>
                            @foreach($kategori as $id => $name)
                                <option value="{{ $id }}" {{ $id == old('id_kategori', $produk->id_kategori) ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                        @error('id_kategori')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="merk">Brand</label>
                        <input type="text" name="merk" id="merk" class="form-control" value="{{ old('merk', $produk->merk) }}">
                        @error('merk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="harga_beli">Purchase Price</label>
                        <input type="number" step="0.01" name="harga_beli" id="harga_beli" class="form-control" value="{{ old('harga_beli', $produk->harga_beli) }}" required>
                        @error('harga_beli')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="harga_jual">Selling Price</label>
                        <input type="number" step="0.01" name="harga_jual" id="harga_jual" class="form-control" value="{{ old('harga_jual', $produk->harga_jual) }}" required>
                        @error('harga_jual')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="diskon">Discount (%)</label>
                        <input type="number" step="0.01" name="diskon" id="diskon" class="form-control" value="{{ old('diskon', $produk->diskon) }}">
                        @error('diskon')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="stok">Stock</label>
                        <input type="number" name="stok" id="stok" class="form-control" value="{{ old('stok', $produk->stok) }}" required>
                        @error('stok')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Update Product</button>
                        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
@endpush

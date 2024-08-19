@extends('layouts.master')

@section('title')
    Add Product
@endsection

@section('breadcrumb')
@parent
    <li><a href="{{ route('produk.index') }}">Product List</a></li>
    <li class="active">Add Product</li>
@endsection

@section('content')
<div class="row" style="margin: 0;">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="box" style="border-radius: 5px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
            <div class="box-header with-border" style="background-color: #f8f9fa; padding: 15px; border-bottom: 1px solid #ddd;">
                <h3 class="box-title">Add Product</h3>
            </div>
            <div class="box-body" style="padding: 15px;">
                <form action="{{ route('produk.store') }}" method="post">
                    @csrf
                    <div class="form-group @error('nama_produk') has-error @enderror">
                        <label for="nama_produk">Product Name</label>
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Product Name" required>
                        @error('nama_produk')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('id_kategori') has-error @enderror">
                        <label for="id_kategori">Category</label>
                            <select name="id_kategori" id="id_kategori" class="form-control" required>
                            <option value="">Select Category</option>
                            @foreach($kategori as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                            </select>
                            @error('id_kategori')
                            <span class="help-block">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group @error('id_brand') has-error @enderror">
    <label for="id_brand">Brand</label>
    <select name="id_brand" id="id_brand" class="form-control" required>
        <option value="">Select Brand</option>
        @foreach($brands as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
    </select>
    @error('id_brand')
        <span class="help-block">{{ $message }}</span>
    @enderror
</div>


                    <div class="form-group @error('harga_beli') has-error @enderror">
                        <label for="harga_beli">Purchase Price</label>
                        <input type="number" name="harga_beli" id="harga_beli" class="form-control" placeholder="Purchase Price" required>
                        @error('harga_beli')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group @error('harga_jual') has-error @enderror">
                        <label for="harga_jual">Selling Price</label>
                        <input type="number" name="harga_jual" id="harga_jual" class="form-control" placeholder="Selling Price" required>
                        @error('harga_jual')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group @error('diskon') has-error @enderror">
                        <label for="diskon">Discount</label>
                        <input type="number" name="diskon" id="diskon" class="form-control" placeholder="Discount" min="0" max="100">
                        @error('diskon')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group @error('stok') has-error @enderror">
                        <label for="stok">Stock</label>
                        <input type="number" name="stok" id="stok" class="form-control" placeholder="Stock" required>
                        @error('stok')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

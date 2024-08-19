@extends('layouts.master')

@section('title')
    All Products
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Product List</li>
@endsection

@section('content')

<div class="row" style="margin: 0;">
    <div class="col-lg-12">
        <div class="box" style="border-radius: 5px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
            <div class="box-header with-border" style="background-color: #f8f9fa; padding: 15px; border-bottom: 1px solid #ddd;">
                <div class="text-center">
                    <a href="{{ route('produk.create') }}" class="btn btn-primary btn-flat" style="border-radius: 5px; font-size: 16px;"><i class="fa fa-plus-circle"></i> Add Product</a>
                </div>
            </div>

            <div class="box-body table-responsive" style="padding: 15px;">
                <table class="table table-striped table-bordered table-hover" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background-color: #007bff; color: #fff;">
                            <th width="10%" style="text-align: center;">SL No.</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Purchase Price</th>
                            <th>Selling Price</th>
                            <th>Discount</th>
                            <th>Stock</th>
                            <th width="15%" style="text-align: center;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $produk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $produk->kode_produk }}</td>
                            <td>{{ $produk->nama_produk }}</td>
                            <td>{{ $kategori[$produk->id_kategori] ?? 'N/A' }}</td>
                            <td>{{ $brands[$produk->id_brand] ?? 'N/A' }}</td>
                            <!-- <td>{{ $produk->merk }}</td> -->
                            <td>{{ format_uang($produk->harga_beli) }}</td>
                            <td>{{ format_uang($produk->harga_jual) }}</td>
                            <td>{{ $produk->diskon }}%</td>
                            <td>{{ format_uang($produk->stok) }}</td>
                            <td>
                                <div class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('produk.edit', $produk->id_produk) }}">
                                            <button class="btn btn-md btn-success p-1">Edit</button>
                                        </a>
                                        <form action="{{ route('produk.destroy', $produk->id_produk) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-md btn-danger p-1">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@includeIf('produk.form')

@endsection

@push('scripts')
@endpush

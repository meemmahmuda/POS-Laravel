@extends('layouts.master')

@section('title')
    Edit Category
@endsection

@section('breadcrumb')
    @parent
    <li><a href="{{ route('kategori.index') }}">Category List</a></li>
    <li class="active">Edit Category</li>
    
@endsection

@section('content')
<div class="row" style="margin: 0;">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="box" style="border-radius: 5px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
            <div class="box-header with-border" style="background-color: #f8f9fa; padding: 15px; border-bottom: 1px solid #ddd;">
                <h3 class="box-title">Edit Category</h3>
            </div>
            <div class="box-body" style="padding: 15px;">
            <form action="{{ route('kategori.update', $kategori->id_kategori) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group @error('nama_kategori') has-error @enderror">
                    <label for="nama_kategori">Category Name</label>
                    <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" placeholder="Category Name" value="{{ old('nama_kategori', $kategori->nama_kategori) }}" required>
                    @error('nama_kategori')
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

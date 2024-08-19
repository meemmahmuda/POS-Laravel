@extends('layouts.master')

@section('title')
    Edit Supplier
@endsection

@section('breadcrumb')
    @parent
    <li><a href="{{ route('supplier.index') }}">Supplier List</a></li>
    <li class="active">Edit Supplier</li>
@endsection

@section('content')
<div class="row" style="margin: 0;">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="box" style="border-radius: 5px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
            <div class="box-header with-border" style="background-color: #f8f9fa; padding: 15px; border-bottom: 1px solid #ddd;">
                <h3 class="box-title">Edit Supplier</h3>
            </div>
            <div class="box-body" style="padding: 15px;">
                <form action="{{ route('supplier.update', $supplier->id_supplier) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group @error('nama') has-error @enderror">
                        <label for="nama_supplier">Supplier Name</label>
                        <input type="text" name="nama" id="nama_supplier" class="form-control" placeholder="Supplier Name" value="{{ old('nama', $supplier->nama) }}" required>
                        @error('nama')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group @error('telepon') has-error @enderror">
                        <label for="telepon">Telephone</label>
                        <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Telephone" value="{{ old('telepon', $supplier->telepon) }}" required>
                        @error('telepon')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group @error('alamat') has-error @enderror">
                        <label for="alamat">Address</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Address" required>{{ old('alamat', $supplier->alamat) }}</textarea>
                        @error('alamat')
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

@extends('layouts.master')

@section('title')
    Add Brand
@endsection

@section('breadcrumb')
@parent
    <li><a href="{{ route('brand.index') }}">Brand List</a></li>
    <li class="active">Add Brand</li>
@endsection

@section('content')
<div class="row" style="margin: 0;">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="box" style="border-radius: 5px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
            <div class="box-header with-border" style="background-color: #f8f9fa; padding: 15px; border-bottom: 1px solid #ddd;">
                <h3 class="box-title">Add Brand</h3>
            </div>
            <div class="box-body" style="padding: 15px;">
                <form action="{{ route('brand.store') }}" method="post">
                    @csrf
                    <div class="form-group @error('name') has-error @enderror">
                        <label for="name">Brand Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Brand Name" required>
                        @error('name')
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

@extends('layouts.master')

@section('title')
    All Brands
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Brand List</li>
@endsection

@section('content')

<div class="row" style="margin: 0;">
    <div class="col-lg-12">
        <div class="box" style="border-radius: 5px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
            <div class="box-header with-border" style="background-color: #f8f9fa; padding: 15px; border-bottom: 1px solid #ddd;">
                <div class="text-center">
                    <a href="{{ route('brand.create') }}" class="btn btn-primary btn-flat" style="border-radius: 5px; font-size: 16px;">
                        <i class="fa fa-plus-circle"></i> Add Brand
                    </a>
                </div>
            </div>

            <div class="box-body table-responsive" style="padding: 15px;">

                <table class="table table-striped table-bordered table-hover" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background-color: #007bff; color: #fff;">
                            <th width="10%" style="text-align: center;">SL No.</th>
                            <th>Brand</th>
                            <th width="30%" style="text-align: center;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($brands as $brand)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $brand->name }}</td>
                            <td>
                            <div class="text-center">
                            <div class="btn-group" role="group">
                            <a href="{{ route('brand.edit', $brand->id) }}">
                                <button class="btn btn-md btn-success p-1">Edit</button>
                            </a>
                            <form action="{{ route('brand.destroy', $brand->id) }}" method="POST" style="display: inline;">
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

@includeIf('brand.form')

@endsection

@push('scripts')
@endpush

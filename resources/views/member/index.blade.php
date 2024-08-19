@extends('layouts.master')

@section('title')
    All Member
@endsection

@section('breadcrumb')
    @parent
    <li class="active">List of Members</li>
@endsection

@section('content')

<div class="row" style="margin: 0;">
    <div class="col-lg-12">
        <div class="box" style="border-radius: 5px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
            <div class="box-header with-border" style="background-color: #f8f9fa; padding: 15px; border-bottom: 1px solid #ddd;">
                <div class="text-center">
                    <a href="{{ route('member.create') }}" class="btn btn-primary btn-flat" style="border-radius: 5px; font-size: 16px;">
                        <i class="fa fa-plus-circle"></i> Add Member
                    </a>
                </div>
            </div>

            <div class="box-body table-responsive" style="padding: 15px;">
                <table class="table table-striped table-bordered table-hover" style="width: 100%; border-collapse: collapse;">
                    <thead>
                        <tr style="background-color: #007bff; color: #fff;">
                            <th width="10%" style="text-align: center;">SL No.</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Telephone</th>
                            <th>Address</th>
                            <th width="30%" style="text-align: center;">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($members as $member)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $member->kode_member }}</td>
                            <td>{{ $member->nama }}</td>
                            <td>{{ $member->telepon }}</td>
                            <td>{{ $member->alamat }}</td>
                            <td>
                                <div class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('member.edit', $member->id_member) }}">
                                            <button class="btn btn-md btn-success p-1">Edit</button>
                                        </a>
                                        <form action="{{ route('member.destroy', $member->id_member) }}" method="POST" style="display: inline;">
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

@includeIf('member.form')

@endsection

@push('scripts')
@endpush

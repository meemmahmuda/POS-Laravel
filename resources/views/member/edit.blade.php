@extends('layouts.master')

@section('title')
    Edit Member
@endsection

@section('breadcrumb')
    @parent
    <li><a href="{{ route('member.index') }}">List of Members</a></li>
    <li class="active">Edit Member</li>
@endsection

@section('content')
<div class="row" style="margin: 0;">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="box" style="border-radius: 5px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">
            <div class="box-header with-border" style="background-color: #f8f9fa; padding: 15px; border-bottom: 1px solid #ddd;">
                <h3 class="box-title">Edit Member</h3>
            </div>
            <div class="box-body" style="padding: 15px;">
                <form action="{{ route('member.update', $member->id_member) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group @error('kode_member') has-error @enderror">
                        <label for="kode_member">Member Code</label>
                        <input type="text" name="kode_member" id="kode_member" class="form-control" placeholder="Member Code" value="{{ old('kode_member', $member->kode_member) }}" required>
                        @error('kode_member')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('nama') has-error @enderror">
                        <label for="nama">Name</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Name" value="{{ old('nama') ?? $member->nama }}" required>
                        @error('nama')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('telepon') has-error @enderror">
                        <label for="telepon">Telephone</label>
                        <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Telephone" value="{{ old('telepon', $member->telepon) }}" required>
                        @error('telepon')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('alamat') has-error @enderror">
                        <label for="alamat">Address</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Address" required>{{ old('alamat', $member->alamat) }}</textarea>
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

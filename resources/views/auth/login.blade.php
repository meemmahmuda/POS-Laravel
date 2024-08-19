@extends('layouts.auth')

@section('login')
<div class="login-box" style="width: 100%; max-width: 400px; margin: auto; padding: 20px; border-radius: 10px; background-color: #fff; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);">
    <!-- /.login-logo -->
    <div class="login-box-body" style="padding: 20px;">
        <div class="login-logo" style="text-align: center; margin-bottom: 20px;">
            <a href="{{ url('/') }}">
                <img src="{{ url($setting->path_logo) }}" alt="logo.png" width="100">
            </a>
        </div>

        <form action="{{ route('login') }}" method="post" class="form-login">
            @csrf
            <div class="form-group has-feedback @error('email') has-error @enderror">
                <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}" autofocus style="border-radius: 5px; border: 1px solid #ddd; box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.1); padding: 10px;">
                @error('email')
                    <span class="help-block" style="color: #a94442;">{{ $message }}</span>
                @else
                <span class="help-block with-errors"></span>
                @enderror
            </div>
            <div class="form-group has-feedback @error('password') has-error @enderror">
                <input type="password" name="password" class="form-control" placeholder="Password" required style="border-radius: 5px; border: 1px solid #ddd; box-shadow: inset 0px 1px 2px rgba(0, 0, 0, 0.1); padding: 10px;">
                @error('password')
                    <span class="help-block" style="color: #a94442;">{{ $message }}</span>
                @else
                    <span class="help-block with-errors"></span>
                @enderror
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-success btn-block btn-flat" style="border-radius: 5px; padding: 10px; font-size: 16px;">Log In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<style>
    body {
        background-color: #10ac84; /* Background color */
        height: 100vh; /* Full viewport height */
        display: flex; /* Use flexbox to center content */
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        margin: 0;
    }
</style>
@endsection

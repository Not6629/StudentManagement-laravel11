@extends('layouts.guest')

@section('content')
    <div class="col-md-6">
        <div class="card mb-4 mx-4">
            <div class="card-body p-4">
                <h1>{{ __('Reset Password') }}</h1>
                <form action="{{ route('password.set') }}" method="POST">
                    @csrf
                    @if(session('status'))
                        <div role="alert" class="alert alert-success py-2 ">
                            <ul class="py-0 m-0">
                                <li>{{ session('status') }}</li>
                            </ul>
                        </div>
                    @endif
                    <div class="input-group mb-3 mt-3"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="{{ asset('icons/coreui.svg#cil-envelope-open') }}"></use>
                        </svg></span>
                        <input class="form-control @error('email') is-invalid @enderror" type="email"
                               id="email" name="email" placeholder="{{ __('Email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="input-group mb-4"><div class="input-group mb-4"><span class="input-group-text">
                        <svg class="icon">
                          <use xlink:href="{{ asset('icons/coreui.svg#cil-lock-locked') }}"></use>
                        </svg></span>
                          <input class="form-control @error('password') is-invalid @enderror" type="password"
                                 id="password" name="password"
                                 placeholder="{{ __('New Password') }}">
                          @error('password')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                          @enderror
                        </div>
                    </div>
                      
                    <button class="btn btn-block btn-success"
                            type="submit">{{ __('Reset Password') }}</button>
                    </form>
            </div>
        </div>
    </div>
@endsection

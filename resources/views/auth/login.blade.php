@extends('layouts.app2')

@section('content')
<div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body text-center">
                <i class="bi-hexagon-fill me-2" style="color: blue; font-size: 35px;"></i>
                <h3 class="fw-bold">Employee Data Master</h3>
                <hr class="my-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-9">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="col-md-9">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="row mb-0 justify-content-center">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center" style="width: 100%;">
                                <i class="bi bi-box-arrow-in-right pe-2" style=" font-size: 18px;"></i>{{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

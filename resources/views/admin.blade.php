@extends('layouts.app')
@section('title', 'Admin Panel')

@section('content')
<!--==========================
Intro Section
============================-->
<section class="banner">
    <div class="d-flex justify-content-center h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-lg-12">
          <h2>Admin</h2>    
        </div> 
      </div>
    </div>             
</section><!-- #intro -->


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="border: 1px solid rgba(0, 0, 0, 0);" class="card">
                	

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            

        </div>
    </div>
</div>
@endsection
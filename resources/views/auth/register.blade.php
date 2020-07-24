@extends('layouts.loginlayout', ['title' => 'Inscription'])

@section('content')

    <div class="register-box">
        <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>
    
        <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Creer un compte</p>
    
            <form action="{{ route('register') }}" method="post" data-parsley-validate>
                @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nom" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Mot de passe" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password_confirmation"  placeholder="Mot de passe de confirmation"   required>
                <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
                </div>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                </div>
                <!-- /.col -->
            </div>
            </form>
    
            <a href="{{ route('login')}}" class="text-center">J'ai deja un compte</a>
        </div>
        <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
        
@endsection

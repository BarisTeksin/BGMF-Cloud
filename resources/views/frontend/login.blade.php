@extends('template')

@section('page_name')
Login
@endsection

@section('content')
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                    <img src="../assets/images/brand/icon.svg" alt="Lucid">
                    <strong>{{ config('app.name') }}</strong>
                </div>
                <div class="card">
                    <div class="header">
                        <p class="lead">Giriş Yap</p>
                    </div>
                    <div class="body">
                        <form class="form-auth-small" method="POST" action="{{route('login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="control-label sr-only">Eposta</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email" placeholder="Eposta" required>
                                @error('email')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label sr-only">Şifre</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" placeholder="Şifre" required>
                                @error('password')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Giriş Yap</button>
                            <div class="bottom">
                                <span class="helper-text">Hesabınız yok mu? <a href="{{ route('register') }}">Kayıt
                                        Ol</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
@endsection
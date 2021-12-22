@extends('template')

@section('page_name')
Profil
@endsection

@section('content')
<div class="main_content mt-0" id="main-content">

    <div class="page">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </div>
                    @endif
                    <div class="card planned_task">
                        <div class="header">
                            <h4 class="my-auto">Mağaza Bilgileri</h4>
                            <a href="{{ url('dashboard/products') }}" class="btn btn-danger ml-auto"><i
                                    class="fa fa-arrow-left"></i> Geri</a>
                        </div>
                        <div class="body">
                            <form method="POST" action="{{ route('profile.update', 'shop_data') }}">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="code" class="col-form-label">Satıcı Id</label>
                                        <input type="text"
                                            class="form-control @error('shop_number') is-invalid @enderror"
                                            placeholder="{{ Auth::user()->shop_number ?? 'Satıcı Id' }}"
                                            id="shop_number" name="shop_number"
                                            value="{{ old('shop_number') ?? ($product->code ?? '') }}" required>
                                        @error('shop_number')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="discount_limit" class="col-form-label">API Key</label>
                                        <input type="text"
                                            class="form-control @error('shop_username') is-invalid @enderror"
                                            placeholder="{{ Auth::user()->shop_username ? '********************' : 'API Key' }}"
                                            id="shop_username" name="shop_username"
                                            value="{{ old('shop_username') ?? '' }}" required>
                                        @error('shop_username')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="site" class="col-form-label">API Secret</label>
                                        <input type="text"
                                            class="form-control @error('shop_password') is-invalid @enderror"
                                            placeholder="{{ Auth::user()->shop_password ? '********************' : 'API Secret' }}"
                                            id="shop_password" name="shop_password"
                                            value="{{ old('shop_password') ?? '' }}" required>
                                        @error('shop_password')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="code" class="col-form-label">Mağaza Linki</label>
                                        <input type="text" class="form-control @error('shop_url') is-invalid @enderror"
                                            placeholder="https://www.trendyol.com/magaza/xxxxxxx" id="shop_url"
                                            name="shop_url" value="{{ Auth::user()->shop_url ?? '' }}" required>
                                        @error('shop_url')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block btn-icon-label">
                                    <span class="btn-inner--icon"><i class="fa fa-save"></i></span>
                                    <span class="btn-inner--text">Kaydet</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card planned_task">
                        <div class="header">
                            <h4 class="my-auto">Profil</h4>
                        </div>
                        <div class="body">
                            <form method="POST" action="{{ route('profile.update', 'user_data') }}">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="code" class="col-form-label">İsim Soyisim</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="İsim Soyisim" id="name"
                                            name="name" value="{{ old('name') ?? (Auth::user()->name ?? '') }}"
                                            required>
                                        @error('name')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="discount_limit" class="col-form-label">Telefon Numarası</label>
                                        <input type="tel"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            placeholder="Telefon Numarası" id="phone"
                                            name="phone" value="{{ old('phone') ?? (Auth::user()->phone ?? '') }}"
                                            pattern="[0-9]{10}" required>
                                        @error('phone')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="site" class="col-form-label">Eposta</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') ?? (Auth::user()->email ?? '') }}"
                                            placeholder="Eposta"
                                            required>
                                        @error('email')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="address" class="col-form-label">Adres</label>
                                        <input class="form-control @error('address') is-invalid @enderror"
                                            placeholder="Adres" id="address" name="address" cols="40" rows="5"
                                            value="{{ Auth::user()->address ?? ''}}" required>
                                        </input>
                                        @error('address')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block btn-icon-label">
                                    <span class="btn-inner--icon"><i class="fa fa-save"></i></span>
                                    <span class="btn-inner--text">Kaydet</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
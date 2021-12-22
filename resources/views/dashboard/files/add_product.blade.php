@extends('template')

@section('page_name')
Ürün Ekle
@endsection

@section('content')
<div class="main_content mt-0" id="main-content">
    <div class="page">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </div>
                    @endif
                    <div class="card planned_task">
                        <div class="header">
                            <h4 class="my-auto">Ürün Ekle</h4>
                            <a href="{{ url('dashboard/products')}}" class="btn btn-danger ml-auto"><i
                                    class="fa fa-arrow-left"></i> Geri</a>
                        </div>
                        <div class="body">
                            <form method="POST"
                                action="@if (isset($product)){{route('products.update',$product->id)}}@else {{route('products.store')}}@endif ">
                                @csrf
                                @if (isset($product))
                                @method('PUT')
                                @endif
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="code" class="col-form-label">Ürün Id</label>
                                        <input type="text" class="form-control @error('code') is-invalid @enderror"
                                            placeholder="Ürün İd" id="code" name="code"
                                            value="{{ old('code') ?? $product->code ?? ''}}" required>
                                        @error('code')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="discount_limit" class="col-form-label">Kampanya Limiti</label>
                                        <input type="number"
                                            class="form-control @error('discount_limit') is-invalid @enderror"
                                            id="discount_limit" name="discount_limit" step="0.1" min="0"
                                            placeholder="Kampanya Limiti"
                                            value="{{ old('discount_limit') ?? $product->discount_limit ?? 0}}"
                                            required>
                                        @error('discount_limit')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="site" class="col-form-label">Site</label>
                                        <select class="selectpicker" id="site" name="site">
                                            <option value="Trendyol" selected>Trendyol</option>
                                            <option value="Hepsiburada">Hepsiburada</option>
                                        </select>
                                        @error('site')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="min_price" class="col-form-label">En düşük Fiyat</label>
                                        <input type="number"
                                            class="form-control @error('min_price') is-invalid @enderror" id="min_price"
                                            name="min_price" step="0.1" min="1" placeholder="En düşük Fiyat"
                                            value="{{ old('min_price') ?? $product->min_price ?? 0}}" required>
                                        @error('min_price')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="default_price" class="col-form-label">Normal Fiyat</label>
                                        <input type="number"
                                            class="form-control @error('default_price') is-invalid @enderror"
                                            id="default_price" name="default_price" step="0.1" min="1"
                                            placeholder="Normal Fiyat"
                                            value="{{ old('default_price') ?? $product->default_price ?? 0}}" required>
                                        @error('default_price')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="drop_price" class="col-form-label">Düşüş Miktarı</label>
                                        <input type="number"
                                            class="form-control @error('drop_price') is-invalid @enderror"
                                            id="drop_price" name="drop_price" step="0.1" min="0"
                                            placeholder="Düşüş Miktarı"
                                            value="{{ old('drop_price') ?? $product->drop_price ?? 0}}" required>
                                        @error('drop_price')
                                        <div class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary btn-lg btn-block btn-icon-label">
                                    <span class="btn-inner--icon"><i class="fa fa-save"></i></span>
                                    <span class="btn-inner--text">Kaydet</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card planned_task">
                        <div class="header">
                            <h4 class="my-auto">İçeri Aktar</h4>
                        </div>
                        <div class="body">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <span>Urun_Id,Min,Normal,Düşüş,Kampanya,Site başlıkları excelde bulunmak zorundadır aksi
                                    halde hata verecektir.</span>
                            </div>
                            <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <div class="text-left">
                                            <input type="file" name="file" class="input-lg" id="customFile">
                                            <label class="custom-file-label" for="customFile">Dosya Seç</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-success btn-lg btn-block btn-icon-label">
                                            <span class="btn-inner--icon"><i class="ti-import"></i></span>
                                            <span class="btn-inner--text">İçeri Aktar</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
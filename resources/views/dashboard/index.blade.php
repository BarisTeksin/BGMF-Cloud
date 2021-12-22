@extends('template')

@section('page_name')
Panel
@endsection

@section('content')
<div class="main_content" id="main-content">
    <div class="page">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card widget_2 big_icon traffic">
                        <div class="body">
                            <h6>Ürün Limiti</h6>
                            <h2>{{$data['product_count']}} <small class="info">/ {{\Auth::user()->user_limit}}</small></h2>
                            <small>Ürün limitinizin aktif ürünlerinize oranı</small>
                            <div class="progress mb-0">
                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="{{ $data['product_count'] / \Auth::user()->user_limit * 100 }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $data['product_count'] / \Auth::user()->user_limit * 100 }}%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card widget_2 big_icon sales">
                        <div class="body">
                            <h6>Aktif Ürün Oranı</h6>
                            <h2>{{$data['product_count']}} <small class="info">/ {{$data['total_product_count']}}</small></h2>
                            <small>Aktif ürünlerinizin toplam ürünlerinize oranı</small>
                            <div class="progress mb-0">
                                <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="{{ $data['product_count'] / $data['total_product_count'] * 100 }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $data['product_count'] / $data['total_product_count'] * 100 }}%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card widget_2 big_icon email">
                        <div class="body">
                            <h6>Kazanan Ürün Oranı</h6>
                            <h2>{{$data['win_product_count']}} <small class="info">/ {{$data['product_count']}}</small></h2>
                            <small>Buybox kazanan ürünlerinizin aktif ürünlerinize oranı</small>
                            <div class="progress mb-0">
                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: {{ $data['win_product_count'] / $data['product_count'] * 100 }}%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Son Fiyat Değişiklikleri</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>İşlem</th>
                                            <th>Tarih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['last_changes'] as $product)
                                        <tr>
                                            <td class="w-25"><a href="https://www.trendyol.com/XXXXXYYY/XXXX-p-{{$product->code}}" target="_blank">{{$product->code}}</td>
                                            <td class="w-50">
                                                <a>{{ $product->log }}</a>
                                            </td>
                                            <td class="w-25">
                                                <a>{{ date('d-m-Y H:i', strtotime($product->created_at)) }}</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection
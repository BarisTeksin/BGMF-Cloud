@extends('template')

@section('page_name')
Fiyat Değişiklikleri
@endsection

@section('content')
<div class="main_content mt-0" id="main-content">
    
    <div class="page">
        <div class="container-fluid">
            <div class="row clearfix">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </div>
                    @endif
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <h4 class="my-auto">Fiyat Değişiklikleri</h4>
                            <div class="ml-auto">
                                <a href="{{ route('dashboard.log_clear')}}" class="btn btn-danger ml-auto"><i
                                    class="fa fa-trash-o"></i> Temizle</a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table va_center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>İşlem</th>
                                            <th>Tarih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
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
                                <div class="d-flex justify-content-center">
                                    {{ $products->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
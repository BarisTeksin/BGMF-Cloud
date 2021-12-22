@extends('template')

@section('page_name')
Faturalar
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
                            <h4 class="my-auto">Faturalar</h4>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table va_center mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tutar</th>
                                            <th>Sunucu Sayısı</th>
                                            <th>Tarih</th>
                                            <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($faturalar as $fatura)
                                        <tr>
                                            <td class="w-25"><a href="{{url('fatura/'.$fatura->id)}}" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                                            <td class="w-25"><a>{{$fatura->tutar}}</a></td>
                                            <td class="w-25">
                                                <a>{{ $fatura->sunucu_sayisi }}</a>
                                            </td>
                                            <td class="w-25">
                                                <a>{{ date('d-m-Y H:i', strtotime($fatura->created_at)) }}</a>
                                            </td>
                                            <td>
                                                <a href="{{url('fatura/'.$fatura->id)}}" class="btn btn-success btn-md" target="_blank"><i class="fa fa-search"></i> Görüntüle</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{ $faturalar->links('pagination::bootstrap-4') }}
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
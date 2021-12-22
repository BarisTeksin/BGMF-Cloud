@extends('template')

@section('page_name')
Files
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
                            <h4 class="my-auto">Files</h4>
                            <div class="ml-auto">
                                <a href="{{ url('products.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Ekle</a>
                                <a href="{{ url('file-export') }}" class="btn btn-success"><i class="ti-export"></i> Çıktı Al</a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table va_center mb-0">
                                    <thead>
                                        <tr>
                                            <th>File Type</th>
                                            <th>File Name</th>
                                            <th>Datetime</th>
                                            <th>Events</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($files as $file)
                                        <tr>
                                            <td>{{$file->file_type}}</td>
                                            <td>{{$file->file_name}}</td>
                                            <td>{{$file->created_at}}</td>
                                            <td>
                                                <a href="{{ url('file/'.$file->id)}}" class="btn btn-success btn-sm"><i class="fa fa-download"></i></a>
                                                <a href="{{ url('dashboard/products/delete/'.$file->id)}}"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center">
                                    {{ $files->links('pagination::bootstrap-4') }}
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
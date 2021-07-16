@extends('Layout.master')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Upload Product Price</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="hr-line-dashed"></div>
<div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        @if(!empty(Session::get('message')))
                        <div id ="msgs" class="alert alert-success">{{ Session::get('message') }}
                        </div>
                        @endif
                        <div class="ibox-content">
                            <form action="{{ url('import') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">File</label>
                                     <input id="product_image" name="file" type="file" class="form-control" autocomplete="off" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary btn-sm" type="submit">Add Product</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @include('Layout.footerlink')

@stop 
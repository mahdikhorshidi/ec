@extends('layouts.app')
@section('content')
<div class="app-body-inner">
    <div class="row-col row-col-xs b-b">
        <!-- column -->
        <div class="col-sm-2 col-md-2 w w-auto-sm b-r">
            <div class="row-col">
                <div class="row-row">
                    <div class="row-body scrollable hover">
                        <div class="row-inner">
                            <div class="nav nav-pills nav-stacked m-t-sm">
                                <a class="nav-link _500" href="">همه گروه ها</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-a">
                    <span bs-tooltip title="Double click to Edit" class="pull-right text-muted inline p-a-xs m-r-sm"><i class="fa fa-question"></i></span>
                    <a href class="btn btn-sm white"><i class="fa fa-plus fa-fw m-r-xs"></i> <span class="hidden-sm-down">گروه جدید</span></a>
                </div>
            </div>
        </div>
        <!-- /column -->
        <!-- column -->
        <div class="col-sm-4 col-md-3 light bg b-r">
            <div class="row-col">
                <div class="p-a-xs b-b">
                    <div class="input-group">
                        <span class="input-group-addon no-border no-bg"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control no-border no-bg" placeholder="Search all contacts">
                    </div>
                </div>
                <div class="row-row">
                    <div class="row-body scrollable hover">
                        <div class="row-inner">
                            <div class="list inset">
                                @foreach($products AS $product)
                                <div class="list-item pointer">
                                    <div class="list-left">
                                        <span class="w-40 avatar">
                                          <img src="{{ $product->avatar OR "/assets/images/a0.jpg" }}" class="img-circle">
                                        </span>
                                    </div>
                                    <div class="list-body">
                                        {{ $product->name }}
                                        <small class="block"><i class="fa fa-phone m-r-sm text-muted"></i>{{ $product->barcode }}</small>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-a b-t text-center">
                    <a href class="btn btn-sm white btn-addon"><i class="fa fa-plus fa-fw m-r-xs"></i> محصول جدید</a>
                </div>
            </div>
        </div>
        <!-- /column -->

        <!-- column -->
        <div class="col-sm-6 col-md-7">
            <div class="row-col">
                <div class="p-a-sm">
                    <div>
                        <a class="btn btn-sm white pull-right"><i class="fa fa-times"></i></a>
                        <a class="btn btn-sm white">ویرایش</a>
                    </div>
                </div>
                <div class="row-row">
                    <div class="row-body">
                        <div class="row-inner">
                            <div class="padding">
                                {!! Form::open(array('route' => 'admin.products.store','files'=>true)) !!}
                                @include('admin.products.form')
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /column -->
    </div>
</div>
@endsection
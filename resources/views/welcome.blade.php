@extends('layouts.app')

@section('content')

    <div class="item introduction">
        <div class="item-bg">
            <img src="../assets/images/a1.jpg" class="blur opacity-3">
        </div>
        <div class="item-overlay active p-a">
            <ul class="nav navbar-nav top  nav-md pull-right">
                <li class="nav-item dropdown pull-right">
                    <a class="nav-link" href data-toggle="dropdown">
                        <i class="material-icons">&#xe8cb;</i>
                        <b class="label label-sm up warn">{{Cart::content()->count()}}</b>
                    </a>
                    <div class="dropdown-menu text-color w-xl animated fadeInUp p-a-0 pull-right">
                        <div class="b-b p-a p-y-sm">
                            <strong><span>{{Cart::content()->count()}}</span> مورد در سبد</strong>
                        </div>
                        <div class="scrollable" style="max-height: 132px">
                            <ul class="list-group no-bg m-a-0 no-radius no-border">
                                @if(Cart::count() > 0)
                                    @foreach(Cart::content() as $item)
                                        <li class="list-group-item alert">
                                            <a href="/shop/cart?rowId={{$item->rowId}}&delete=delete" class="pull-right inline p-x-sm">
                                                <i class="fa fa-close text-sm text-muted"></i>
                                            </a>
                                            <span class="clear block text-ellipsis">
                {{$item->qty}} x {{$item->name}} - {{$item->price}} تومان
              </span>
                                        </li>
                                    @endforeach
                                @else
                                    <li class="text-center p-a">هنوز موردی به لیست سفارش شما اضافه نشده است.</li>
                                @endif
                            </ul>
                        </div>
                        <div class="b-t p-a text-sm">
                            <a href="/shop/order/create" class="btn primary btn-sm pull-right">تسویه حساب</a>
                            <span>مجموع: <strong>{{Cart::subtotal()}} تومان</strong></span>
                        </div>
                    </div>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link pull-right" href="/register">عضویت</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pull-right" href="/login">ورود</a>
                </li>
                @else
                <li class="nav-item dropdown pull-right">
                  <a class="nav-link clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="{{ Gravatar::fallback('/assets/images/a0.jpg')->get(Auth::user()->email) }}"
                         alt="{{ Auth::user()->name }}">
                    <i class="on b-white bottom"></i>
                  </span>
                  </a>
                  @include('partials.dropdown.user')
                </li>
                @endguest
            </ul>
        </div>
        <div class="p-a-md">
            <div class="row m-t">
                <div class="text-center">
                    <div class="clear m-a">
                        <h3 class="m-a-0 m-b-xs"><a href="{{config('app.url')}}">
                                <img src="../assets/images/logo.png"
                                     style="    max-height: 24px;    vertical-align: -4px;    display: inline-block;"
                                     alt="{{ config('app.name', 'Netsa') }}">
                                <span class="inline text-muted">{{ config('app.name', 'Netsa') }}</span>
                            </a></h3>
                        <p class="text-muted">مرکز خدمات آنلاین عکس و عکاسی</p>
                        <div class="block clearfix m-b">
                            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook indigo"></i>
                            </a>
                            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter light-blue"></i>
                            </a>
                            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                <i class="fa fa-google-plus"></i>
                                <i class="fa fa-google-plus red"></i>
                            </a>
                            <a href="" class="btn btn-icon btn-social rounded white btn-sm">
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-linkedin cyan-600"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dker p-x">
        <div class="row">
            <div class="col-sm-6">
                <div class="p-y-md clearfix nav-active-primary">
                    <ul class="nav nav-pills nav-sm">
                        <li class="nav-item">
                            <a class="nav-link" href data-toggle="tab" data-target="#tab_1">چاپ عکس</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href data-toggle="tab" data-target="#tab_2">قاب</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href data-toggle="tab" data-target="#tab_3">دوربین</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href data-toggle="tab" data-target="#tab_4">آلبوم - ژورنال</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="p-y text-center text-sm-left">
                    <a href class="inline p-x text-center">
                        <span class="h4 block m-a-0">2k</span>
                        <small class="text-xs text-muted">Followers</small>
                    </a>
                    <a href class="inline p-x b-l b-r text-center">
                        <span class="h4 block m-a-0">250</span>
                        <small class="text-xs text-muted">Following</small>
                    </a>
                    <a href class="inline p-x text-center">
                        <span class="h4 block m-a-0">89</span>
                        <small class="text-xs text-muted">Activities</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="padding">
        <div class="row">
            <h3 class="block m-a">پیشنهاد ویژه</h3>
        </div>
        <div class="row">
            @foreach(\App\Models\Product::all() AS $product)
                <div class="col-xs-12 col-sm-3">
                    <div class="box">
                        <div class="item dark">
                            <a href=""><img src="../assets/images/c4.jpg" class="w-full"></a>
                            <div class="item-overlay black-overlay w-full">
                                <p class="h-3x m-t-lg p-x">{{ $product->description }}</p>
                            </div>
                            <div class="bottom gd-overlay p-a-sm">
                                <a href="{{route('admin.product.like', $product->id)}}" class="m-r">
                                    @if(!$product->liked)
                                    <i class="fa fa-heart-o inline"></i>
                                    @else
                                    <i class="fa fa-heart text-danger"></i>
                                    @endif{{ $product->likesCount }}</a>
                            </div>
                            <div class="top item-overlay text-right p-x-xs">
                                <a href="" class="btn btn-xs white pull-right m-a-sm">جزئیات بیشتر</a>
                            </div>
                        </div>
                        <a class="md-btn md-raised md-fab md-mini m-r pos-rlt md-fab-offset pull-right white" href="{{action('CartController@cart', $product->id)}}"><i
                                    class="material-icons md-24"></i></a>
                        <div class="p-a">
                            <a href="" class="_800 text-md p-x-sm">{{ $product->name }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
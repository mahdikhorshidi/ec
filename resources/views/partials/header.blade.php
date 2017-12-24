<div class="navbar">
    <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
        <i class="material-icons">&#xe5d2;</i>
    </a>
    @include('partials.brand')

<!-- nabar right -->
    <ul class="nav navbar-nav pull-right">
        <li class="nav-item dropdown">
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
        <li class="nav-item dropdown">
            <a class="nav-link" href data-toggle="dropdown">
                <span>ورود</span>
            </a>
            @include('partials.dropdown.login')
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">
              <span class="hidden-xs-down btn btn-sm rounded btn-outline b-danger text-u-c _600">
                عضویت
              </span>
                <span class="hidden-sm-up ">
                <i class="material-icons">&#xe7fd;</i>
              </span>
            </a>
        </li>
        @else
            <li class="nav-item dropdown">
                <a class="nav-link clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="{{ Gravatar::fallback('/assets/images/a0.jpg')->get(Auth::user()->email) }}" alt="{{ Auth::user()->name }}">
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                @include('partials.dropdown.user')
            </li>
            @endguest
            <li class="nav-item hidden-md-up">
                <a class="nav-link" data-toggle="collapse" data-target="#collapse">
                    <i class="material-icons">&#xe5d4;</i>
                </a>
            </li>
    </ul>
    <!-- / navbar right -->
    <!-- navbar collapse -->
    <div class="collapse navbar-toggleable-sm" id="collapse">
        <!-- link and dropdown -->
        <ul class="nav navbar-nav nav-active-border b-primary">
            <li class="nav-item">
                <a class="nav-link" href>
                    <span class="nav-text">Video</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href>
                    <span class="nav-text">Music</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href>
                    <span class="nav-text">Photo</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href>
                    <span class="nav-text">Blog</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href>
                    <span class="nav-text">Shop</span>
                </a>
            </li>
        </ul>
        <!-- / link and dropdown -->
    </div>
    <!-- / navbar collapse -->
</div>
<nav class="navbar navbar-expand-md navbar-expand-lg  sticky-top shadow-sm mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Estore</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      
                      <li class="nav-item">
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('store.index') }}">
                                        Store 
                                    </a>
                                </li>
                        </li>
            <li class="dropdown">
            <a class="nav-link" href = "#" class = "dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Categories<span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
           <li><a href="category.html">Apparel &amp; Accessories</a></li>
            <li><a href="category.html">Baby Products</a></li>
            <li><a href="category.html">Beauty &amp; Health</a></li>
            <li><a href="category.html">Electronics</a></li>
            <li><a href="category.html">Furniture</a></li>
            <li><a href="category.html">Home &amp; Garden</a></li>
            <li><a href="category.html">Luggage &amp; Bags</a></li>
            <li><a href="category.html">Shoes</a></li>
            <li><a href="category.html">Sports &amp; Entertainment</a></li>
            <li><a href="category.html">Watches</a></li>
            <li class="divider"></li>
            <li><a href="ecommerce.html">All Categories</a></li>
            <li class = "divider"></li>
            <li><a href = "#">Separated link</a></li>   
                </ul>
            </li>     
                </ul>
    
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                <li class="nav-item"><a href="{{ route('products.shoppingCart')}}" class="nav-link">
                            <span class="fa fa-shopping-cart fa-lg">
                            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>    
                            </span></a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @else
                    {{-- <li class="nav-item"><a href="#" class="nav-link">
                        <span class="fa fa-user fa-lg"></span></a>
                    </li> --}}
    
                    <li class="nav-item"><a href="#" class="nav-link">
                            <span class="fa fa-bell fa-lg"></span></a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('products.shoppingCart')}}" class="nav-link">
                            <span class="fa fa-shopping-cart fa-lg">
                            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>    
                            </span></a>
                    </li>
    
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
    
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
    
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="{{ route('users.profile') }}"> {{ __('Profile') }}</a>
                                <a class="dropdown-item" href="{{ route('users.profile') }}"> {{ __('Orders') }}</a>
                            @if (Auth::user()->hasRole('admin'))
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}"> {{ __('Admin Dashboard') }}</a>
                            @endif
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
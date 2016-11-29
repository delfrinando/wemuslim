
<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">
                                <li><a href="/account">My Account</a></li>

                                @if(!Sentinel::check())
                                    <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                                @else
                                    <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="index.php">
                                <span style="font-size: 0px;"><img src="{{URL::asset('img/logo.png')}}"
                                                                   alt="WeMuslim" style="width: 50px;"></span>

                                <p>We<strong>Muslim</strong> <span>Syar'i is Easy</span></p>
                            </a>
                            <!-- img based logo -->
                            <!-- <a href="index.html"><img src="{{URL::asset('img/logo.jpg')}}" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        <div class="aa-cartbox">
                            <a class="aa-cart-link" href="#">
                                <span class="fa fa-shopping-basket"></span>
                                <span class="aa-cart-title">SHOPPING CART</span>
                                <span class="aa-cart-notify">2</span>
                            </a>

                            <div class="aa-cartbox-summary">
                                <ul>
                                    <li>
                                        <a class="aa-cartbox-img" href="#"><img src="{{URL::asset('img/woman-small-2.jpg')}}"
                                                                                alt="img"></a>

                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>

                                            <p>1 x $250</p>
                                        </div>
                                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                                    </li>
                                    <li>
                                        <a class="aa-cartbox-img" href="#"><img src="{{URL::asset('img/woman-small-1.jpg')}}"
                                                                                alt="img"></a>

                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>

                                            <p>1 x $250</p>
                                        </div>
                                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                                    </li>
                                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                                    </li>
                                </ul>
                                <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                            </div>
                        </div>
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            <form action="">
                                <input type="text" name="" id="" placeholder="Search here ex. 'umrah april' ">
                                <button type="submit"><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                        <!-- / search box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>

<div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
        <span>Loading</span>
    </div>
</div>

<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
@extends('layouts.subdefault')
@section('content')

        <!-- Cart view section -->
<!-- Cart view section -->
<section id="cart-view">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-view-area">
                    <div class="cart-view-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <form action="/cart/update" method="POST">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="ida" value="asdas">
                                    @foreach($carts as $cart)
                                        <tr>
                                            <td><a class="remove" href="/cart/delete/{{$cart->rowId}}">
                                                    <fa class="fa fa-close"></fa>
                                                </a></td>
                                            <td><a href="#"><img src="{{URL::asset('img/man/polo-shirt-1.png')}}"
                                                                 alt="img"></a>
                                            </td>

                                            <td><a class="aa-cart-title"
                                                   href="/product/{{$cart->id}}">{{$cart->name}}</a></td>
                                            <td><input hidden id="price-{{$cart->rowId}}" type="number"
                                                       value="{{$cart->price}}">{{$cart->price}}</td>
                                            <td><input hidden id="qty-{{$cart->rowId}}" type="number"
                                                       value="{{$cart->qty}}">
                                                {{$cart->qty}}</td>
                                            {{--<td><input id="quantity-{{$cart->rowId}}"--}}
                                            {{--onchange="myFunction('price-{{$cart->rowId}}','quantity-{{$cart->rowId}}', 'total-{{$cart->rowId}}', 'finaltotal-{{$cart->rowId}}')"--}}
                                            {{--class="aa-cart-quantity" type="number"--}}
                                            {{--value="{{$cart->qty}}"></td>--}}
                                            <td><input hidden id="total-{{$cart->rowId}}" type="number"
                                                       value="{{$cart->price * $cart->qty}}">
                                                {{$cart->price * $cart->qty}}
                                            </td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </form>
                                {{--@foreach($carts as $cart)--}}
                                {{--<tr>--}}
                                {{--<td><a class="remove" href="#">--}}
                                {{--<fa class="fa fa-close"></fa>--}}
                                {{--</a></td>--}}
                                {{--<td><a href="#"><img src="{{URL::asset('img/man/polo-shirt-1.png')}}"--}}
                                {{--alt="img"></a>--}}
                                {{--</td>--}}

                                {{--<td><a class="aa-cart-title" href="/product/{{$cart->id}}">{{$cart->name}}</a></td>--}}
                                {{--<td><input hidden id="price-{{$cart->rowId}}" type="number"--}}
                                {{--value="{{$cart->price}}">{{$cart->price}}</td>--}}
                                {{--<td><input id="quantity-{{$cart->rowId}}"--}}
                                {{--onchange="myFunction('price-{{$cart->rowId}}','quantity-{{$cart->rowId}}', 'total-{{$cart->rowId}}', 'finaltotal-{{$cart->rowId}}')"--}}
                                {{--class="aa-cart-quantity" type="number"--}}
                                {{--value="{{$cart->qty}}"></td>--}}
                                {{--<td>--}}
                                {{--<input id="finaltotal-{{$cart->rowId}}" type="number"--}}
                                {{--value="{{$cart->price * $cart->qty}}">--}}
                                {{--<span id="total-{{$cart->rowId}}"--}}
                                {{--value="{{$cart->price * $cart->qty}}">{{$cart->price * $cart->qty}}</span>--}}
                                {{--</td>--}}
                                {{--</td>--}}
                                {{--</tr>--}}
                                {{--@endforeach--}}
                                {{--<tr>--}}
                                {{--<td colspan="6" class="aa-cart-view-bottom">--}}
                                {{--<input class="aa-cart-view-btn" type="submit" value="Update Cart">--}}
                                {{--</td>--}}
                                {{--</tr>--}}
                                </tbody>
                            </table>
                        </div>
                        <!-- Cart Total view -->
                        <div class="cart-view-total">
                            <h4>Cart Totals</h4>
                            <table class="aa-totals-table">
                                <tbody>
                                <tr>
                                    <th>Total</th>
                                    <td>{{$total}}</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->

@stop

<script>
    function myFunction(x, y, z, f) {
        var x = document.getElementById(x).value;
        var y = document.getElementById(y).value;
        document.getElementById(z).innerHTML = x * y;
        document.getElementById(f).innerHTML = x * y;
    }
</script>
@extends('layouts.subdefault')
@section('content')

        <!-- product category -->
<section id="aa-product-category">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
                <div class="aa-product-catg-content">
                    <div class="aa-product-catg-body">
                        <ul class="aa-product-catg">
                            <!-- start single product item -->
                            @foreach($products as $product)
                                <li>
                                    <figure>
                                        <a class="aa-product-img" href="#"><img
                                                    src="{{URL::asset('img/women/girl-1.png')}}"
                                                    alt="polo shirt img"></a>
                                        <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add
                                            To
                                            Cart</a>
                                        <figcaption>
                                            <h4 class="aa-product-title"><a href="#">{{$product->name}}</a></h4>
                                            <span class="aa-product-price">Rp. {{$product->price}}</span></span>

                                            <p class="aa-product-descrip">{{$product->description}}</p>
                                        </figcaption>
                                    </figure>
                                    <div class="aa-product-hvr-content">
                                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View"
                                           data-toggle="modal" data-target="#quick-view-modal-{{$product->id}}"><span
                                                    class="fa fa-search"></span></a>
                                    </div>
                                    <!-- product badge -->
                                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                                </li>
                            @endforeach
                        </ul>
                        <!-- quick view modal -->

                        @foreach($products as $product)
                            <div class="modal fade" id="quick-view-modal-{{$product->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                            <div class="row">
                                                <!-- Modal view slider -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-slider">
                                                        <div class="simpleLens-gallery-container" id="demo-1">
                                                            <div class="simpleLens-container">
                                                                <div class="simpleLens-big-image-container">
                                                                    <img src="{{URL::asset('img/women/girl-1.png')}}"
                                                                         class="simpleLens-big-image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal view content -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-content">
                                                        <h3>{{$product->name}}</h3>

                                                        <div class="aa-price-block">
                                                            <span class="aa-product-view-price">{{$product->price}}</span>

                                                            <p class="aa-product-avilability">Avilability:
                                                                <span>{{$product->stock}}</span></p>
                                                        </div>
                                                        <p>{{$product->description}}</p>

                                                        <div class="aa-prod-quantity">
                                                            <form action="">
                                                                <select name="" id="">
                                                                    <option value="0" selected="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="4">5</option>
                                                                    <option value="5">6</option>
                                                                </select>
                                                            </form>
                                                        </div>
                                                        <br>
                                                        <div class="aa-prod-view-bottom">
                                                            <table>
                                                                <tr>
                                                                    <td><a href="#" class="aa-add-to-cart-btn"><span
                                                                                    class="fa fa-shopping-cart"></span>Add To
                                                                            Cart</a></td>
                                                                    <td><a href="{{ URL::to('product/' . $product->id) }}" class="aa-add-to-cart-btn">View Details</a></td>
                                                                </tr>
                                                            </table>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>

                            @endforeach
                                    <!-- / quick view modal -->
                    </div>

                    <div class="aa-product-catg-pagination">
                        <nav>
                            {{ $products->links() }}
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
                <aside class="aa-sidebar">
                    <!-- single sidebar -->
                    <div class="aa-sidebar-widget">
                        <h3>Category</h3>
                        <ul class="aa-catg-nav">
                            <li><a href="#">Hajj</a></li>
                            <li><a href="">Umrah</a></li>
                            <li><a href="">Halal Foods</a></li>
                            <li><a href="">Clothes</a></li>
                            {{--<li><a href="">Sports</a></li>--}}
                        </ul>
                    </div>
                </aside>
            </div>

        </div>
    </div>
</section>
<!-- / product category -->


@stop
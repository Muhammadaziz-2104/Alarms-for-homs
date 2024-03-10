@extends('layouts.main')

@section('title', 'StudyLab')

@section('content')
    <div class="content-wrapper">

        <div class="breadcrumb-wrap bg-f br-4">
            <div class="overlay bg-russian op-7"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-title">
                            <h2>Shop Left Sidebar </h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home</a></li>
                                <li>Shop Left Sidebar</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="shop-wrap ptb-100 bg-selago">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-xl-4 col-lg-4 order-xl-1 order-lg-1 order-md-2 order-2">
                        <div class="sidebar">
                            <div class="sidebar-widget search-box">
                                <div class="form-group">
                                    <input type="search" placeholder="Search By Keywords">
                                    <button type="submit"> <i class="flaticon-search-1"></i></button>
                                </div>
                            </div>
                            <div class="sidebar-widget categories box">
                                <h4>Categories</h4>
                                <div class="category-box style1">
                                    <ul class="list-style">
{{--@dd($products)--}}
{{--                                        @foreach($products as $products)--}}
{{--                                            <div class="card">--}}
{{--                                                <img src="{{$products->photo}}" class="card-img-top" alt="...">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <h5 class="card-title">Nomi: {{$products->name}}</h5>--}}
{{--                                                    <a class="btn btn-success" href="{{route('show.book',['book'=>$new_book->id])}}">Ko'rish</a>--}}
{{--                                                    <a class="btn btn-success" href="#">Ko'rish</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endforeach--}}
{{--                                        @dd($category)--}}
{{--                                        @foreach($category as $filter)--}}
{{--                                            <li data-filter=".{{$filter->name}}">--}}
{{--                                                <a href="shop-by-category.html">--}}
{{--                                                    <i class="flaticon-right-arrow-angle"></i>--}}
{{--                                                    {{$filter->name}}<span>(14)</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endforeach--}}
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget price-range-widget box">
                                <h4>Price Filter</h4>
                                <div class="checkbox-item-wrap">
                                    <div class="checkbox-item d-flex justify-content-between align-items-center">
                                        <div class="checkbox">
                                            <input type="checkbox" id="check_1">
                                            <label for="check_1">$100-$120</label>
                                        </div>
                                        <span>(11)</span>
                                    </div>
                                    <div class="checkbox-item d-flex justify-content-between align-items-center">
                                        <div class="checkbox">
                                            <input type="checkbox" id="check_2">
                                            <label for="check_2">$120-$140</label>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="checkbox-item d-flex justify-content-between align-items-center">
                                        <div class="checkbox">
                                            <input type="checkbox" id="check_3">
                                            <label for="check_3">$140-$180</label>
                                        </div>
                                        <span>(15)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget new-product box">
                                <h4>Popular Products</h4>
                                <div class="new-product-wrap">
                                    <div class="new-product-item">
                                        <div class="new-product-img">
                                            <img src="assets/img/shop/product-thumb-1.png" alt="Iamge">
                                        </div>
                                        <div class="new-product-info">
                                            <h6><a href="shop-details.html">360 Degree Camera</a></h6>
                                            <span>$58.00</span>
                                        </div>
                                    </div>
                                    <div class="new-product-item">
                                        <div class="new-product-img">
                                            <img src="assets/img/shop/product-thumb-3.png" alt="Iamge">
                                        </div>
                                        <div class="new-product-info">
                                            <h6><a href="shop-details.html">Night Vision Camera</a></h6>
                                            <span>$78.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 order-xl-2 order-lg-2 order-md-1 order-1">
                        <div class="row justify-content-center">
                            @foreach($products as $product)
                                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                    <div class="product-card">
                                        <div class="product-img">
                                            <img src="assets/img/shop/{{$product->image}}" alt="Image">
                                            <span class="bg-razz">Sold</span>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-info-left">
{{--                                                <a href="{{route('show',['id'=>$product->id])}}">--}}
                                                <h4><a href="{{route('products',['product'=>$product->id])}}}">{{$product->name}}</a></h4>
                                                <span class="product-price">{{$product->price}} {{$product->quantity}}</span>
{{--                                                <span class="ratings">--}}
{{--                                                    <i class="flaticon-star-1"></i>--}}
{{--                                                    5--}}
{{--                                                </span>--}}
                                            </div>
                                            <div class="product-info-right">
                                                <a href="{{route('card')}}" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-2.jpg" alt="Image">--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">360 Degree Camera</a></h4>--}}
{{--                                            <span class="products-price">$45.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--4.5--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-3.png" alt="Image">--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">Face password Lock</a></h4>--}}
{{--                                            <span class="products-price">$20.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--5--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-4.png" alt="Image">--}}
{{--                                        <span class="bg-black">New</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">HD Bullet Camera</a></h4>--}}
{{--                                            <span class="products-price">$30.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--5--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-5.png" alt="Image">--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">Close Circuit Camera</a></h4>--}}
{{--                                            <span class="products-price">$80.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--5--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-6.png" alt="Image">--}}
{{--                                        <span class="bg-razz">New</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">Night Vission Camera</a></h4>--}}
{{--                                            <span class="products-price">$120.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--5--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-7.png" alt="Image">--}}
{{--                                        <span class="bg-razz">Sold</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">Card Slot Camera</a></h4>--}}
{{--                                            <span class="products-price">$50.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--4.3--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-8.png" alt="Image">--}}
{{--                                        <span class="bg-razz">Sold</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">Gurdian Camera</a></h4>--}}
{{--                                            <span class="products-price">$54.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--4.6--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">--}}
{{--                                <div class="products-card">--}}
{{--                                    <div class="products-img">--}}
{{--                                        <img src="assets/img/shop/products-9.png" alt="Image">--}}
{{--                                    </div>--}}
{{--                                    <div class="products-info">--}}
{{--                                        <div class="products-info-left">--}}
{{--                                            <h4><a href="shop-details.html">DVR Camera</a></h4>--}}
{{--                                            <span class="products-price">$50.00</span>--}}
{{--                                            <span class="ratings">--}}
{{--<i class="flaticon-star-1"></i>--}}
{{--5--}}
{{--</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="products-info-right">--}}
{{--                                            <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>

                        <div class="page-navigation">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    {{$products->links("pagination.default")}}
{{--                                    <ul class="page-nav list-style">--}}
{{--                                        <li><a href="shop-right-sidebar.html"><i class="flaticon-left-arrow-3"></i>--}}
{{--                                            </a></li>--}}
{{--                                        <li><a class="active" href="shop-right-sidebar.html">1</a></li>--}}
{{--                                        <li><a href="shop-right-sidebar.html">2</a></li>--}}
{{--                                        <li><a href="shop-right-sidebar.html">3</a></li>--}}
{{--                                        <li><a href="shop-right-sidebar.html"> <i class="flaticon-right-arrow"></i>--}}
{{--                                            </a></li>--}}
{{--                                    </ul>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="newsleter-wrap style3">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content-title style1">
                        <h2>Subscribe To Our Newsletter</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="#" class="newsletter-form">
                        <input type="email" placeholder="Your Email Address*">
                        <button type="submit">Subscribe <i class="flaticon-right-arrow"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

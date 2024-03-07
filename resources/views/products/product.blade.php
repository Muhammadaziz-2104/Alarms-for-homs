@extends('layouts.main')

@section('title', 'StudyLab')

@section('content')

    <div class="content-wrapper">

        <div class="breadcrumb-wrap bg-f br-1">
            <div class="overlay bg-russian op-7"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-title">
                            <h2>Product Details</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="shop-left-sidebar.html">Shop</a></li>
                                <li>Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="product-details-wrap pt-100">
            <div class="container">
                <div class="row gx-5 ">
                    <div class="col-lg-6">
                        <div class="single-product-gallery">
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-large-img">
                                            @dd($product->image)
{{--                                            <img src="assets/img/shop/{{$product->image}}" alt="Image">--}}
                                        </div>
                                    </div>
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="product-large-img">--}}
{{--                                            <img src="assets/img/shop/single-product-2.png" alt="Image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="product-large-img">--}}
{{--                                            <img src="assets/img/shop/single-product-3.png" alt="Image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
{{--                            <div class="swiper-container gallery-thumbs">--}}
{{--                                <div class="swiper-wrapper">--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="product-thumb">--}}
{{--                                            <img src="assets/img/shop/single-product-1.png" alt="Image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="product-thumb">--}}
{{--                                            <img src="assets/img/shop/single-product-2.png" alt="Image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="swiper-slide">--}}
{{--                                        <div class="product-thumb">--}}
{{--                                            <img src="assets/img/shop/single-product-3.png" alt="Image">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
{{--                    @dd($product->id)--}}
                    <div class="col-lg-6">
                        <div class="single-product-details">
                            <div class="single-product-title">
                                <h2>{{$product->name}}</h2>
                                <h3><span>${{$product->regular_price}}</span> <span class="discount">${{$product->sale_price}}</span></h3>
                            </div>
                            <div class="single-product-desc">
                                <p>
                                    {{$product->description}}
                                </p>
                            </div>
                            <div class="product-more-option">
                                <div class="products-more-option-item">
                                    <h5>Category :</h5>
                                    <a href="shop-left-sidebar.html">{{$product->category->name}}</a>
                                </div>
                                <div class="product-more-option-item">
                                    <h5>Quantity:</h5>
                                    <div class="product-quantity">
                                        <div class="qtySelector">
                                            <span class="las la-minus decreaseQty"></span>
                                            <input type="text" class="qtyValue" value="1"/>
                                            <span class="las la-plus increaseQty"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-more-option-item">
                                    <h5>Availability :</h5>
{{--                                    @if($product->)--}}
{{--                                    <a href="shop-left-sidebar.html">In Stock</a>--}}
                                </div>
                            </div>
                            <div class="single-product-option">
                                <a href="{{route('card',['product'=>$product->id])}}}" class="btn style4"><span>Add To Cart </span><i class="flaticon-shopping-cart-1"></i></a>
                            </div>
                            <div class="product-more-option">
                                <div class="product-more-option-item">
                                    <h5>Share On :</h5>
                                    <ul class="social-profile style3 list-style">
                                        <li><a target="_blank" href="https://facebook.com/"><i class="lab la-facebook-f"></i> </a></li>
                                        <li><a target="_blank" href="https://linkedin.com/"> <i class="lab la-linkedin-in"></i> </a></li>
                                        <li><a target="_blank" href="https://twitter.com/"> <i class="lab la-twitter"></i> </a></li>
                                        <li><a target="_blank" href="https://instagram.com/"> <i class="lab la-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-100 mmt-20">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs product-tablist" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1" type="button" role="tab">Product Details</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link " data-bs-toggle="tab" data-bs-target="#tab_2" type="button" role="tab">Product Reviews</button>
                            </li>
                        </ul>
                        <div class="tab-content product-tab-content">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                                <div class="product_desc">
                                    <p>Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Ipsum non facilis
                                        corporis modi consequatur. Iure perferendis dicta illum deleniti veritatis
                                        vero tempora maxime ducimus quaerat, iusto omnis magni doloribus. Repellat
                                        exercitationem odio rerum doloremque quod, enim iste doloribus fugit
                                        incidunt suscipit, totam illo molestias! Beatae error reprehenderit autem
                                        ex sit laudantium praesentium quibusdam optio, ab omnis magnam nobis
                                        quisquam enim ad sint? Error soluta exercitationem earum atque</p>
                                    <p>Lorem ipsum dolor, sit, amet consectetur adipisicing elit. Modi, id.
                                        Doloremque nobis eaque cum excepturi ratione natus ex architecto neque,
                                        facilis repudiandae, quod repellendus, minima porro, exercitationem quas
                                        recusandae consequatur!</p>
                                    <ul class="content-feature-list list-style mb-0">
                                        <li><i class="las la-check-circle"></i>Lorem ipsum dolor, sit amet.
                                        </li>
                                        <li><i class="las la-check-circle"></i>Amet consectetur adipisicing
                                            elit.
                                            Officia, odit!</li>
                                        <li><i class="las la-check-circle"></i>Aquaerat ipsa quis possimus.
                                        </li>
                                        <li><i class="las la-check-circle"></i>Lorem, ipsum dolor sit amet
                                            consectetur
                                            adipi.</li>
                                        <li><i class="las la-check-circle"></i>Consectetur adipisicing elit.
                                            Voluptatibus, dignissimos.</li>
                                        <li><i class="las la-check-circle"></i>Highly professional
                                            administration</li>
                                        <li><i class="las la-check-circle"></i>Lorem ipsum dolor sit.</li>
                                        <li><i class="las la-check-circle"></i> Adipisicing Itaque quod qui
                                            cumque.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_2" role="tabpanel">
                                <div class="row gx-5">
                                    <div class="col-lg-6">
                                        <div class="comment-form-title">
                                            <h4>Product Review</h4>
                                        </div>
                                        <div class="post-comment-wrap mb-0 review-box">
                                            <div class="comment-item">
                                                <div class="comment-author_img">
                                                    <img src="assets/img/blog/author-3.jpg" alt="Image">
                                                </div>
                                                <div class="comment-author_text">
                                                    <div class="comment-author_info">
                                                        <h6>Ema Watson</h6>
                                                        <span>4.5<i class="flaticon-star-1"></i></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                        diam nonumy eirmod tempor invidunt ut.</p>
                                                </div>
                                            </div>
                                            <div class="comment-item">
                                                <div class="comment-author_img">
                                                    <img src="assets/img/blog/author-4.jpg" alt="Image">
                                                </div>
                                                <div class="comment-author_text">
                                                    <div class="comment-author_info">
                                                        <h6>Andrea Kelley</h6>
                                                        <span>4.5<i class="flaticon-star-1"></i></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                        diam nonumy eirmod tempor invidunt ut.</p>
                                                </div>
                                            </div>
                                            <div class="comment-item">
                                                <div class="comment-author_img">
                                                    <img src="assets/img/blog/author-2.jpg" alt="Image">
                                                </div>
                                                <div class="comment-author_text">
                                                    <div class="comment-author_info">
                                                        <h6>Tonu Stark</h6>
                                                        <span>4.2<i class="flaticon-star-1"></i></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                        diam nonumy eirmod tempor invidunt ut.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="comment-form-wrap">
                                            <div class="comment-form-title">
                                                <h4>Write Your Comment</h4>
                                            </div>
                                            <form action="#" class="comment-form">
                                                <div class="row gx-3">
                                                    <div class="col-xl-6 col-lg-12">
                                                        <div class="form-group s1">
                                                            <input type="text" placeholder="Your  Full Name*">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-12 ">
                                                        <div class="form-group s2">
                                                            <input type="email" placeholder="Email Address*">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12">
                                                        <div class="form-group v1">
                                                            <textarea name="review-msg" id="review-msg" cols="30" rows="10" placeholder="Your comments..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="checkbox mb-20">
                                                            <input type="checkbox" id="test_1">
                                                            <label for="test_1">I Agree With Your <a class="link style2" href="terms-conditions.html">Terms &
                                                                    Conditions</a></label>
                                                        </div>
                                                        <button class="btn style4 ">Submit Review </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-100">
                    <div class="section-title mb-50 style1">
                        <span>Check Out</span>
                        <h2>Related Products</h2>
                    </div>
                </div>
                <div class="row justify-content-md-center pb-75">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/shop/product-1.png" alt="Image">
                                <span class="bg-razz">Sold</span>
                            </div>
                            <div class="product-info">
                                <div class="product-info-left">
                                    <h4><a href="shop-details.html">Nest Cam Outdoor</a></h4>
                                    <span class="product-price">$50.00</span>
                                    <span class="ratings">
<i class="flaticon-star-1"></i>
5
</span>
                                </div>
                                <div class="product-info-right">
                                    <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/shop/product-2.png" alt="Image">
                            </div>
                            <div class="product-info">
                                <div class="product-info-left">
                                    <h4><a href="shop-details.html">360 Degree Camera</a></h4>
                                    <span class="product-price">$45.00</span>
                                    <span class="ratings">
<i class="flaticon-star-1"></i>
4.5
</span>
                                </div>
                                <div class="product-info-right">
                                    <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="product-card">
                            <div class="product-img">
                                <img src="assets/img/shop/product-3.png" alt="Image">
                            </div>
                            <div class="product-info">
                                <div class="product-info-left">
                                    <h4><a href="shop-details.html">Face password Lock</a></h4>
                                    <span class="product-price">$20.00</span>
                                    <span class="ratings">
<i class="flaticon-star-1"></i>
5
</span>
                                </div>
                                <div class="product-info-right">
                                    <a href="cart.html" class="add-to-cart"><i class="flaticon-shopping-cart-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

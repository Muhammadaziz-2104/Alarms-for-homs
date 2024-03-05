@extends('layouts.main')

@section('title', 'StudyLab')

@section('content')
    <div class="content-wrapper">

        <div class="breadcrumb-wrap bg-f br-2">
            <div class="overlay bg-russian op-8"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-title">
                            <h2>Cart</h2>
                            <ul class="breadcrumb-menu list-style">
                                <li><a href="index.html">Home</a></li>
                                <li>Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="cart-wrap ptb-100">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-table ">
{{--                                    @dd($product)--}}
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Items</th>
                                            <th scope="col">Unit Price</th>
                                            <th scope="col">Qunatity</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Remove</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><a class="cart-item" href="shop-details.html">
                                                    <img src="assets/img/shop/product-thumb-1.png" alt="Image">
                                                    <span>Nest Cam IQ Outdoor</span>
                                                </a></td>
                                            <td>
                                                <p class="cart-item-price">$240.00</p>
                                            </td>
                                            <td>
                                                <div class="cart-qty">
                                                    <div class="product-quantity">
                                                        <div class="qtySelector">
                                                            <span class="decreaseQty"><i class="flaticon-minus "></i></span>
                                                            <input type="text" class="qtyValue" value="1" />
                                                            <span class="increaseQty"><i class="flaticon-add-plus-button "></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cart-item-price">$240.00</p>
                                            </td>
                                            <td>
                                                <button class="cart-action" type="button">
                                                    <i class="flaticon-rubbish"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="cart-item" href="shop-details.html">
                                                    <img src="assets/img/shop/product-thumb-2.png" alt="Image">
                                                    <span>HD Bullet Camera</span>
                                                </a></td>
                                            <td>
                                                <p class="cart-item-price">$640.00</p>
                                            </td>
                                            <td>
                                                <div class="cart-qty">
                                                    <div class="product-quantity">
                                                        <div class="qtySelector">
                                                            <span class="decreaseQty"><i class="flaticon-minus "></i></span>
                                                            <input type="text" class="qtyValue" value="1" />
                                                            <span class="increaseQty"><i class="flaticon-add-plus-button "></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cart-item-price">$60.00</p>
                                            </td>
                                            <td>
                                                <button class="cart-action" type="button">
                                                    <i class="flaticon-rubbish"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a class="cart-item" href="shop-details.html">
                                                    <img src="assets/img/shop/product-thumb-3.png" alt="Image">
                                                    <span>Night Vission Camera</span>
                                                </a></td>
                                            <td>
                                                <p class="cart-item-price">$240.00</p>
                                            </td>
                                            <td>
                                                <div class="cart-qty">
                                                    <div class="product-quantity">
                                                        <div class="qtySelector">
                                                            <span class="decreaseQty"><i class="flaticon-minus "></i></span>
                                                            <input type="text" class="qtyValue" value="1" />
                                                            <span class="increaseQty"><i class="flaticon-add-plus-button "></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="cart-item-price">$240.00</p>
                                            </td>
                                            <td>
                                                <button class="cart-action" type="button">
                                                    <i class="flaticon-rubbish"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-sm-8 mb-25">
                                <div class="coupon-code">
                                    <input type="text" placeholder="Coupon Code">
                                    <button type="button">Apply Coupon</button>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-4 text-sm-end mb-25">
                                <button class="btn style4" type="button">Update Cart</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 offset-xl-3">
                                <div class="cart-total bg-albastor">
                                    <h3 class="cart-box-title">Cart Totals</h3>
                                    <div class="cart-total-item">
                                        <p>Subtotal</p>
                                        <span>$463</span>
                                    </div>
                                    <div class="cart-total-item">
                                        <p>Shipping</p>
                                        <span>$30</span>
                                    </div>
                                    <div class="cart-total-item">
                                        <p>Discount</p>
                                        <span>$43</span>
                                    </div>
                                    <div class="cart-total-item">
                                        <p>Total</p>
                                        <span>$450</span>
                                    </div>
                                    <a class="btn style3 d-block w-100">Proceed To Checkout <i class="flaticon-right-arrow-1"></i></a>
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

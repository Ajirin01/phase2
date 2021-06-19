@extends('layouts.site_base')
@section('content')
    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="pro-thumbnail">Thumbnail</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-quantity">Quantity</th>
                                <th class="pro-subtotal">Total</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                                <form id="update-cart" action="{{ route('update-cart') }}" method="post">
                                    @csrf
                                    @foreach ($carts as $cart)
                                        <tr>
                                            @php
                                                $product = App\Product::find($cart->product_id);
                                                
                                                // return response()->json($cart);
                                                // $product = json_decode($product);
                                            @endphp
                                            <td class="pro-thumbnail"><a href="{{ route('product-details', $product->name) }}"><img class="img-fluid" src="{{asset('public/uploads/'.$product->image)}}"
                                                                                        alt="Product"/></a></td>
                                            <td class="pro-title">{{$product->name}}({{$cart->shopping_type}})<a href="{{ route('product-details', $product->name) }}">
                                                
                                            </a></td>
                                            <td class="pro-price"><span>#{{$cart->product_price}}</span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty"><input name="product_quantity[]" id="product-quantity" type="text" value="{{$cart->product_quantity}}"></div>
                                            </td>
                                            <input type="hidden" name="product_id[]" value="{{$cart->product_id}}">
                                            <input type="hidden" name="shopping_type[]" value="{{$cart->shopping_type}}">
                                            

                                            <td class="pro-subtotal"><span>#{{$cart->product_quantity * $cart->product_price}}</span></td>
                                            <td class="pro-remove"><a href="{{ route('delete_cart_item', $cart->id) }}"><i class="fa fa-trash-o"></i></a></td>
                                            {{-- <td class="pro-remove">
                                                <form action="{{ route('delete_cart_item', $cart->product_quantity) }}" method="POST">
                                                    @csrf
                                                <button style="background: transparent; border: none; cursor: pointer"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </form>
                            </tbody>
                        </table>
                    </div>
    
                    <!-- Cart Update Option -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">
                        <div class="apply-coupon-wrapper">
                            <form action="#" method="post" class=" d-block d-md-flex">
                                <!-- <input type="text" placeholder="Enter Your Coupon Code" required />
                                <button class="sqr-btn">Apply Coupon</button> -->
                            </form>
                        </div>
                        <div class="cart-update mt-sm-16">
                            <a href="{{ route('update-cart') }}" class="sqr-btn"
                                onclick="event.preventDefault()
                                document.getElementById('update-cart').submit()
                                "
                            >Update Cart</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper">
                        <div class="cart-calculate-items">
                            <h3>Cart Totals</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Sub Total</td>
                                        @php
                                            $subtotal = 0;
                                            $shipping = 0;
                                            for($i=0; $i< count($carts); $i++){
                                                $subtotal += $carts[$i]->product_price * $carts[$i]->product_quantity;
                                                $shipping = $shipping + App\Product::find($carts[$i]->product_id)->shipping_cost;
                                            }
                                        @endphp
                                        <td>#{{($subtotal)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>#{{($shipping)}}</td>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <td class="total-amount">#{{ $subtotal + $shipping }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <a href="{{ route('checkout') }}" class="sqr-btn d-block">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->

@endsection
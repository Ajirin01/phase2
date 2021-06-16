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
                                <form action="{{ route('update-cart') }}" method="post">
                                    @foreach ($carts as $cart)
                                        <tr>
                                            @php
                                                $product = App\Product::find($cart->product_id);
                                                // return response()->json($cart);
                                            @endphp
                                            <td class="pro-thumbnail"><a href="{{ route('product-details', $product->id) }}"><img class="img-fluid" src="{{asset('public/uploads/'.$product->image)}}"
                                                                                        alt="Product"/></a></td>
                                            <td class="pro-title">{{$product->name}}<a href="{{ route('product-details', $product->id) }}">
                                                
                                            </a></td>
                                            <td class="pro-price"><span>#{{$cart->product_price}}</span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty"><input id="product-quantity" type="text" value="{{$cart->product_quantity}}"></div>
                                            </td>

                                            <span><input id="product-quantity-hidden{{$cart->product_id}}" type="hidden" name[]="product_quantity"
                                                onchange="handleQuantityChange({{$cart->product_id}})"
                                                >
                                            <span><input type="hidden" value="{{$cart->product_id}}" name[]="product_id">
                                            

                                            <td class="pro-subtotal"><span>#{{$cart->product_quantity * $cart->product_price}}</span></td>
                                            <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
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
                            <a href="{{ route('update-cart') }}" class="sqr-btn">Update Cart</a>
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
                                                $subtotal = $carts[$i]->product_price * $carts[$i]->product_quantity;
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

    <script>
        function handleQuantityChange(){
            
        }
        var product_quantity = document.getElementById('product-quantity1')
        var product_quantity_hidden = document.getElementById('product-quantity-hidden')

        console.log(product_quantity)

        product_quantity.onchange => () {
            console.log('Product quantity changed')
        }
    </script>

@endsection
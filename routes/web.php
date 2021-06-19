<?php
Route::get('/', function () {
    if(Session::get('shopping_type') == "wholesale"){
        $hot_sales = App\Product::where('sale_type','hot_sale')->where('wholesale', 'on')->get();
        $hot_deals = App\Product::where('sale_type','hot_deal')->where('wholesale', 'on')->get();
        $new_arrival = App\Product::where('sale_type','new_arrival')->where('wholesale', 'on')->get();
        $latest_product = App\Product::where('status', 'Active')->where('wholesale', 'on')->orderBy('id', 'desc')->take(20)->get();
    }else{
        $hot_sales = App\Product::where('sale_type','hot_sale')->get();
        $hot_deals = App\Product::where('sale_type','hot_deal')->get();
        $new_arrival = App\Product::where('sale_type','new_arrival')->get();
        $latest_product = App\Product::where('status', 'Active')->orderBy('id', 'desc')->take(20)->get();
    }
    
    return view('home',['hot_sales'=>$hot_sales, 
                        'hot_deals'=>$hot_deals, 
                        'new_arrival'=>$new_arrival, 
                        'latest_products'=>$latest_product,]);
    // return redirect('/home');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function(){
    return redirect('/');
})->name('home');


Route::get('product-detials/{product}', 'SiteController@product_details')->name('product-details');
Route::post('add-to-cart/', 'SiteController@add_to_cart')->name('add-to-cart');
Route::get('cart/', 'SiteController@cart')->name('cart');
Route::post('update-cart', 'SiteController@update_cart')->name('update-cart');
Route::get('delete-cart-item/{item}', 'SiteController@deleteCartItem')->name('delete_cart_item');
Route::get('checkout/', 'SiteController@checkout')->name('checkout')->middleware('auth');
Route::get('search/', 'SiteController@searchResult')->name('search-results');
Route::get('contact-us/', 'SiteController@checkout')->name('contact-us');
Route::post('contact-us/', 'SiteController@checkout')->name('contact-handler');
Route::post('checkout-handler', 'SiteController@checkout_handler')->name('checkout-handler')->middleware('auth');
Route::get('my-acount/', 'SiteController@my_account')->name('my-account');
Route::get('register-login/', 'SiteController@register_login')->name('register-login');
Route::post('authenticate/', 'SiteController@authenticate')->name('authenticate');
Route::get('shop/', 'SiteController@shop')->name('shop');
Route::get('products-by-category/{category}', 'SiteController@products_by_category')->name('products-by-category');
Route::get('products-by-brand/{brand}', 'SiteController@products_by_brand')->name('products-by-brand');
Route::post('shopping-setting/', 'SiteController@shopping_setting')->name('shopping-setting');
Route::post('logout/', 'SiteController@logout')->name('logout');

Route::prefix('admin')->group(function () {
    Route::get('dashboard', 'Admin\DashboardController@dashboard');
    Route::resource('products',	'Admin\ProductsController');
    Route::get('order/{type}',	'Admin\OrdersController@getOrdersByType')->name('orders_by_type');
    Route::get('order-details/{order}',	'Admin\OrdersController@orderDetails')->name('order_details');
    Route::post('update_order_status/{order}', 'Admin\OrdersController@updateOrderStatus')->name('update_order_status');
    Route::resource('brands',	'Admin\BrandsController');
    Route::resource('categories',	'Admin\CategoriesController');
}); 

Route::prefix('retail')->group(function () {
    Route::get('sale', 'Admin\DashboardController@dashboard');
    Route::post('add_products', 'Admin\Pos\SalesController@addProductsToSell')->name('add_product_to_sell');
    Route::post('update_cart', 'Admin\Pos\SalesController@updateCart')->name('update_cart');
    Route::post('process_sale', 'Admin\Pos\SalesController@processSale')->name('process_sale');
    Route::resource('sales',	'Admin\Pos\SalesController');
    // Route::resource('brands',	'Admin\BrandsController');
    // Route::resource('categories',	'Admin\CategoriesController');
}); 

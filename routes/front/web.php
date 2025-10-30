<?php
Route::group(['namespace' => 'Front'], function () {
    Route::get('/','FrontController@homePage')->name('front.home-page');
    Route::get('/san-pham/{slug?}','FrontController@getProductList')->name('front.getProductList');
    Route::get('/special/{slug?}','FrontController@getProductSpecial')->name('front.getProductSpecial');
    Route::get('/chi-tiet-san-pham/{slug?}','FrontController@getProductDetail')->name('front.getProductDetail');


    Route::get('/tin-tuc/{slug?}','FrontController@blogs')->name('front.blogs');
    Route::get('/chi-tiet-tin-tuc/{slug}','FrontController@blogDetail')->name('front.blogDetail');
    Route::get('/gioi-thieu','FrontController@abouts')->name('front.abouts');

    Route::get('/chinh-sach/{slug}','FrontController@getPolicy')->name('front.getPolicy');
    Route::get('/diem-ban/{proSlug?}/{distSlug?}','FrontController@getStores')->name('front.getStores');

    Route::get('/lien-he','FrontController@contact')->name('front.contact');
    Route::post('/postContact','FrontController@postContact')->name('front.submitContact');
    Route::post('/postContactQuick','FrontController@postContactQuick')->name('front.postContactQuick');

    Route::get('/tim-kiem','FrontController@searchProduct')->name('front.searchProduct');

    Route::post('/send-rating','FrontController@submitRating')->name('front.submitRating');

    // gio-hang
    Route::post('/products/{productId}/add-product-to-cart','CartController@addItem')->name('cart.add.item');
    Route::get('/remove-product-to-cart','CartController@removeItem')->name('cart.remove.item');
    Route::get('/gio-hang','CartController@index')->name('cart.index');
    Route::post('/update-cart','CartController@updateItem')->name('cart.update.item');
    Route::get('/thanh-toan','CartController@checkout')->name('cart.checkout');
    Route::post('/checkout','CartController@checkoutSubmit')->name('cart.submit.order');
    Route::post('/checkout-order','CartController@checkoutOrder')->name('cart.submit.checkoutOrder');
    Route::get('/dat-hang-thanh-cong.html','CartController@checkoutSuccess')->name('cart.checkout.success');
    Route::post('/apply-voucher','CartController@applyVoucher')->name('cart.apply.voucher');


    // love list
    Route::get('/san-pham-yeu-thich','WishListController@index')->name('love.add.index');
    Route::post('/{productId}/add-product-to-wishlist','WishListController@addItem')->name('love.add.item');
    Route::get('/remove-product-to-wishlist','WishListController@removeFromWishlist')->name('love.remove.item');
    Route::get('/clear-wishlist','WishListController@removeAll')->name('love.remove.allItem');


    Route::get('onlyme/clear', 'FrontController@clearData')->name('front.clearData');

    Route::get('/{any}', function () {
        // Laravel tự load view errors/404.blade.php khi abort(404)
        abort(404);
    })
        ->where('any', '.*');

});





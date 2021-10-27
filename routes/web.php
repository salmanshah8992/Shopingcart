<?php

use Illuminate\Support\Facades\Route;

Route::get('/','Mycontroller@Home');
Route::get('/Product','Mycontroller@Product')->name('products');
Route::get('/About','Mycontroller@About');
Route::get('/addproduct','Mycontroller@addProduct');
Route::post('/create-product','Mycontroller@createproduct')->name('post.product');



Route::get('/cart','Mycontroller@cart')->name('cart');

Route::get('/cart-to-add/{product}','Mycontroller@addTocart')->name('add.cart');
Route::get('/remove/{id}','Mycontroller@removeFromcart')->name('remove');
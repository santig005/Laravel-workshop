<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', function () {
    $data1 = "About us - Online Store";
    $data2 = "About us";
    $description = "This is an about page ...";
    $author = "Developed by: Santiago";
    return view('home.about')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("description", $description)
      ->with("author", $author);
})->name("home.about");
Route::get('/contact', function () {
    $data1 = "Contact us - Online Store";
    $data2 = "Contact us";
    $description = "These are the means you can use to communicate with us ...";
    $author = "Developed by: Santiago";
    $email= "Email: saj@gmail.com";
    $address="Address: Medellín - Co";
    $phone_number="Phone number: +57 123 456 7890";
    return view('home.contact')->with("title", $data1)
      ->with("subtitle", $data2)
      ->with("description", $description)
      ->with("email", $email)
      ->with("address", $address)
      ->with("phone_number", $phone_number);
})->name("home.contact");
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");



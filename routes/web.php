<?php

Route::get('/','PagesController@home');


Route::get('admin/posts', 'Admin\PostsController@index')->name('admin.posts.index');
Route::get('admin/posts/create', 'Admin\PostsController@create')->name('admin.posts.create');
Route::post ('posts', 'Admin\PostsController@storage')->name('admin.posts.storage');

Route::get('posts', function () {
    return  App\Post::all();
});


Route::get('admin', function(){
    return view('admin.dashboard');
});



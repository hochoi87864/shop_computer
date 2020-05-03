<?php
Route::group(['namespace'=>'Admin','prefix'=>'/admin'],function(){
    Route::get('/','AdminController@index')->name('admin.home');
    Route::get('/test','AdminTestController@index')->name('admin.test');
    Route::group(['prefix'=>'category'],function(){
        Route::get('/','AdminCategoryController@index')->name('admin.category.index');
        Route::get('/create','AdminCategoryController@create')->name('admin.category.create');
        Route::post('/create','AdminCategoryController@store');
        Route::get('/update/{id}','AdminCategoryController@edit')->name('admin.category.edit');
        Route::post('/update/{id}','AdminCategoryController@update');
        Route::get('/{action}/{id}','AdminCategoryController@handle')->name('admin.category.handle');
    });

    Route::group(['prefix'=>'attribute'],function(){
        Route::get('/','AdminAttributeController@index')->name('admin.attribute.index');
        Route::get('/create','AdminAttributeController@create')->name('admin.attribute.create');
        Route::post('/create','AdminAttributeController@store');
        Route::get('/update/{id}','AdminAttributeController@edit')->name('admin.attribute.edit');
        Route::post('/update/{id}','AdminAttributeController@update');
        Route::get('/{action}/{id}','AdminAttributeController@handle')->name('admin.attribute.handle');
    });

    Route::group(['prefix'=>'product'],function(){
        Route::get('/','AdminProductController@index')->name('admin.product.index');
        Route::get('/create','AdminProductController@create')->name('admin.product.create');
        Route::post('/create','AdminProductController@store');
        Route::get('/update/{id}','AdminProductController@edit')->name('admin.product.edit');
        Route::post('/update/{id}','AdminProductController@update');
        Route::get('/{action}/{id}','AdminProductController@handle')->name('admin.product.handle');
        Route::get('/getAttribute','AdminProductController@getAttribute')->name('admin.ajax.get.attribute');
    });

    Route::group(['prefix'=>'article'],function(){
        Route::get('/','AdminArticleController@index')->name('admin.article.index');
        Route::get('/create','AdminArticleController@create')->name('admin.article.create');
        Route::post('/create','AdminArticleController@store');
        Route::get('/update/{id}','AdminArticleController@edit')->name('admin.article.edit');
        Route::post('/update/{id}','AdminArticleController@update');
        Route::get('/{action}/{id}','AdminArticleController@handle')->name('admin.article.handle');
    });

    Route::group(['prefix'=>'transaction'],function(){
        
        Route::get('/','AdminTransactionController@index')->name('admin.transaction.index');
        Route::get('/orderItem/{id}','AdminTransactionController@getOrderItem')->name('admin.get.order.item');
        Route::get('/paid/{id}','AdminTransactionController@transactionPaid')->name('admin.transaction.paid');
        Route::get('/{action}/{id}','AdminTransactionController@handle')->name('admin.transaction.handle');
    });

    Route::group(['prefix'=>'comment'],function(){
        Route::get('/','AdminCommentController@index')->name('admin.comment.index');
        Route::get('/{action}/{id}','AdminCommentController@action')->name('admin.comment.action');
    });

    Route::group(['prefix'=>'comment'],function(){
        Route::get('/','AdminArticleController@index')->name('admin.comment.index');
        Route::get('/{action}/{id}','AdminArticleController@action')->name('admin.comment.action');
    });
});
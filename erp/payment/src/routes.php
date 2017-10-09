<?php

Route::get('payment', function(){
    echo 'Hello from the erp payment package!';
});

Route::get('payment/add/{a}/{b}', 'Erp\Payment\PaymentController@add');
Route::get('payment/subtract/{a}/{b}', 'Erp\Payment\PaymentController@subtract');
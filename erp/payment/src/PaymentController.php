<?php

namespace Erp\Payment;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function add($a, $b){
        $result = $a + $b;
        return view('payment::payment', compact('result'));
    }

    public function subtract($a, $b){
        echo $a - $b;
    }
}

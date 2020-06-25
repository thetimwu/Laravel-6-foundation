<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGatewayContract $paymentGatewayContract)
    {
        // $paymentGateway = new PaymentGateway('GBP');
        $orderDetails->all();

        dd($paymentGatewayContract->charge(3000));
    }
}

<?php

namespace App\Billing;

use illuminate\Support\Str;

class CreditPaymentGateway implements PaymentGatewayContract
{
    private $currency;
    private $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    public function charge($amount)
    {
        // charge the bank
        return [
            'amount' => $amount - $this->discount + $amount * 0.03,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fee' => $amount * 0.03
        ];
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }
}

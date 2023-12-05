<?php

namespace App\Http\Controllers;

use App\Processors\PaymentProcessor;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    public function payment(PaymentRequest $request)
    {
        $data = $request->validated();
        $provider = $data['provider'];
        $amount = $data['amount'];
        $currency = $data['currency'];
        $cardNumber = $data['cardNumber'];

        /**@var Object $payment */
        $payment = $this->processPayment($provider, $amount, $currency, $cardNumber);
        return $this->getPaymentDetails($payment->provider, $payment->id);
    }

    private function processPayment($provider, $amount, $currency, $cardNumber)
    {
        $paymentProcessor = new PaymentProcessor();
        return $paymentProcessor->processPayment($provider, $amount, $currency, $cardNumber);
    }

    private function getPaymentDetails($provider, $paymentId)
    {
        $paymentProcessor = new PaymentProcessor();
        return $paymentProcessor->getPaymentDetails($provider, $paymentId);
    }
}

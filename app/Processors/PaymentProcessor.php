<?php

namespace App\Processors;

use App\Traits\PaypalTrait;
use App\Traits\StripeTrait;

class PaymentProcessor
{
    use StripeTrait, PaypalTrait;

    public function processPayment($provider, $amount, $currency, $cardNumber)
    {
        try {
            if ($provider === 'stripe') {
                return $this->stripePaymentProcess($amount, $currency, $cardNumber);
            } elseif ($provider === 'paypal') {
                return $this->paypalPaymentProcess($amount, $currency, $cardNumber);
            } else {
                throw new \Exception('Méthode de paiement non prise en charge.');
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getPaymentDetails($provider, $paymentId)
    {
        try {
            if ($provider === 'stripe') {
                return $this->stripeGetPayment($paymentId);
            } elseif ($provider === 'paypal') {
                return $this->paypalGetPayment($paymentId);
            } else {
                throw new \Exception('Méthode de paiement non prise en charge.');
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}

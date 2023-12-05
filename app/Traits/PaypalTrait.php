<?php

namespace App\Traits;

trait PaypalTrait
{
    public function paypalPaymentProcess($amount, $currency, $cardNumber)
    {
        // Logique de traitement de paiement avec PayPal
    }

    public function paypalGetPayment($paymentId)
    {
        // Logique de récupération des détails du paiement avec PayPal
    }
}

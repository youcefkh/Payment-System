<?php

namespace App\Traits;

trait StripeTrait
{
    public function stripePaymentProcess($amount, $currency, $cardNumber)
    {
        // Logique de traitement de paiement avec Stripe
    }

    public function stripeGetPayment($paymentId)
    {
        // Logique de récupération des détails du paiement avec Stripe
    }
}

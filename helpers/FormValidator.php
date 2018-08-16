<?php

require_once('../const/PaymentTypeConstants.php');
require_once('../const/CurrencyConstants.php');


require_once('../exceptions/PaymentTypeNotFoundException.php');
require_once('../exceptions/CurrencyNotFoundException.php');

class FormValidator {
    public static function validatePaymentType($paymentType)
    {
        $definedPaymentTypes = array('THREE_D_MODEL' => PaymentType::THREE_D_MODEL, 'THREE_D_PAY' => PaymentType::THREE_D_PAY);

        foreach ($definedPaymentTypes as $key => $value) 
        {
            if($value === $paymentType) 
            {
                return;
            }
        }
        throw new PaymentTypeNotFoundException();
    }

    public static function validateCurrencyType($currency)
    {
        $definedCurrencies = array('EURO' => CurrencyConstants::EURO, 'TL' => CurrencyConstants::TL, 'USD' => CurrencyConstants::USD);

        foreach ($definedCurrencies as $key => $value) 
        {
            if($value === $currency) 
            {
                return;
            }
        }
        throw new CurrencyNotFoundException();
    }
}
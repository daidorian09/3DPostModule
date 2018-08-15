<?php
class CheckoutFormPropsHelper
{

    const AMOUNT_ONE = 1;
    const NO_INSTALLMENT = -1;

    public static function isAmountEqualsToOne($amount) 
    {
        return $amount === CheckoutFormPropsHelper::AMOUNT_ONE ? CheckoutFormPropsHelper::AMOUNT_ONE : $amount;
    }

    public static function isInstallmentApplied($installment)
    {
        return $installment === CheckoutFormPropsHelper::NO_INSTALLMENT;
    }

    public static function replaceAmountSeparators($amount)
    {
        return str_replace(array('.', ','), '' , $amount);
    }
}
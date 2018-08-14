<?php

require_once('./interfaces/PaymentStrategyInterface.php');
class ThreeDModelStrategy implements PaymentStrategy {

    public function payment($paymentData)
    {
        return json_encode($paymentData)
    }

}


?>
<?php
require_once('./interfaces/PaymentStrategyInterface.php');
require_once('./ThreeDStrategy.php')


abstract class PaymentType {
    const threeDModel = 0;
    const threeDPay = 1;
}


class PaymentStrategy implements PaymentStrategyInterface {
    private $_strategy = NULL;
    public function pay($paymentData) {
        switch($paymentData.paymentType) {
            case PaymentType::threeDModel:
            $this->_strategy = new ThreeDModel();
                break;            
            default:                
                break;
        }
    }

    public function payCart($paymentData) {
        return $this->_strategy->pay($paymentData);
    }
}

?>
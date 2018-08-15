<?php
require_once('./interfaces/PaymentStrategyInterface.php');
require_once('./ThreeDModelStrategy.php');


abstract class PaymentType {
    const threeDModel = 1;
    const threeDPay = 1;
}


class PaymentStrategy implements PaymentStrategyInterface {
    private $_strategy = NULL;
    public function __construct(int $paymentType) {
        switch($paymentType) {
            case PaymentType::threeDModel:
            $this->_strategy = new ThreeDModelStrategy();
                break;            
            default:                
                break;
        }
    }    

    public function pay($paymentData) {
        return $this->_strategy->pay($paymentData);
    }
}

?>
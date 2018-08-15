<?php
require_once('./interfaces/PaymentStrategyInterface.php');
require_once('./ThreeDModelStrategy.php');
require_once('../const/PaymentTypeConstants.php');

class PaymentStrategy implements PaymentStrategyInterface {
    private $_strategy = NULL;
    public function __construct(int $paymentType) {
        switch($paymentType) {
            case PaymentType::THREE_D_MODEL:
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
<?php
interface PaymentStrategy {
    public function pay($paymentModel);
}
?>
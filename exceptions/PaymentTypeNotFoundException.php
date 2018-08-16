<?php

class PaymentTypeNotFoundException extends Exception {
    public function errorMessage() {
        return 'Payment Type is not found';
      }
}

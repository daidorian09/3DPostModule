<?php

class CurrencyNotFoundException extends Exception {
    public function errorMessage() {
        return 'Currency is not found';
      }
}

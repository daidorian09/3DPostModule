<?php

class EmptyOrNullClassNameException extends Exception {
    public function errorMessage() {
        return 'Classname is empty or null';
      }
}

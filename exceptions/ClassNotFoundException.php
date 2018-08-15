<?php

class ClassNotFoundException extends Exception {
    public function errorMessage() {
        return 'Class is not found';
      }
}

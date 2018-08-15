<?php

require_once('./PaymentStrategy.php');

$postData =  array('email' => htmlentities($_POST['email']), 
                   'currency' => htmlentities($_POST['currency']),
                   'amount' => htmlentities($_POST['amount']),
                   'paymentType' => (int)htmlentities($_POST['paymentType']), 
                   'installment' => htmlentities($_POST['installment']), 
                   'expireDateMonth' => htmlentities($_POST['expireDateMonth']), 
                   'expireDateYear' => htmlentities($_POST['expireDateYear']),
                   'cardSecurityNumber' => htmlentities($_POST['cardSecurityNumber'])
 );

 $paymentStrategy = new PaymentStrategy($postData['paymentType']);

 $strategy = $paymentStrategy->pay($postData);

echo json_encode($postData)


?>
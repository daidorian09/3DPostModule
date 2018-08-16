<?php

require_once('./interfaces/PaymentStrategyInterface.php');
require_once('./PaymentFactoryService.php');

require_once('../const/VPosConstants.php');
require_once('../const/PaymentModelClassConstants.php');
require_once('../const/PaymentTypeConstants.php');

require_once('../helpers/TransactionIdGeneratorHelper.php');
require_once('../helpers/CheckoutFormPropsHelper.php');
require_once('../helpers/FormValidator.php');


class ThreeDModelStrategy implements PaymentStrategyInterface {

    public function pay($paymentModel) 
    {

        FormValidator::validateCurrencyType($paymentModel['currency']);

        $paymentModel['amount'] = (int)CheckoutFormPropsHelper::replaceAmountSeparators($paymentModel['amount']);
       
        //To do Amount check if an entered amount is 1
        $paymentModel['amount']  =CheckoutFormPropsHelper::isAmountEqualsToOne( $paymentModel['amount'] );

        $model = PaymentFactoryService::build(PaymentModelClassConstants::THREE_D_PAYMENT);
        $model->setStoreMode(VPosConstants::STORE_MODE);
        $model->setStoreApiVersion(VPosConstants::STORE_API_VERSION);
        $model->setStoreType(VPosConstants::STORE_TYPE);
        $model->setStoreTerminalProvUserID(VPosConstants::STORE_TERMINAL_PROV_USER_ID);
        $model->setStoreAmount($paymentModel['amount']);
        $model->setStoreCurrencyCode($paymentModel['currency']);
        $model->setStoreInstallmentCount($paymentModel['installment']);
        $model->setStoreTerminalUserID(VPosConstants::STORE_TERMINAL_USER_ID);
        $model->setStoreOrderID(TransactionIdGeneratorHelper::generateTransactionId());
        $model->setStoreCustomerIpAddress($_SERVER['REMOTE_ADDR']);
        $model->setStoreCustomerEmailAddress($paymentModel['email']);
        $model->setStoreTerminalID(VPosConstants::STORE_TERMINAL_ID);
        $model->setStoreTerminalID_(VPosConstants::STORE_TERMINAL_ID_);
        $model->setStoreTerminalMerchantID(VPosConstants::STORE_TERMINAL_MERCHANT_ID);
        $model->setStoreKey(VPosConstants::STORE_KEY);
        $model->setStoreProvisionPassword(VPosConstants::STORE_PROVISION_PASSWORD);
       
        $SecurityData = strtoupper(sha1($model->getStoreProvisionPassword().$model->getStoreTerminalID()));
        $HashData = strtoupper(sha1($model->getStoreTerminalID().$model->getStoreOrderID().$model->getStoreAmount().$model->getStoreType().$model->getStoreInstallmentCount().$model->getStoreKey().$SecurityData));

        $url = VPosConstants::VPOST_GARANTI_URL;
        $data = array('mode' => $model->getStoreMode(), 'apiversion' => $model->getStoreApiVersion(), 'terminalprovuserid' => $model->getStoreTerminalProvUserID(),
    'terminaluserid' => $model->getStoreTerminalUserID(), 'terminalmerchantid' => $model->getStoreTerminalMerchantID(),'txntype' => $model->getStoreType(),
'txnamount' => $model->getStoreAmount(), 'txncurrencycode' => $model->getStoreCurrencyCode(), 'txninstallmentcount' => $model->getStoreInstallmentCount(),
'orderid' => $model->getStoreOrderID(), 'terminalid' => $model->getStoreTerminalID(), 'successurl' => 'http://localhost:8081/vpos/views/3DModel.php', 'errorurl' => 'http://localhost:8081/vpos/views/3DModel.php',
 'customeremailaddress' => $model->getStoreCustomerEmailAddress(), 'customeripaddress' => $model->getStoreCustomerIpAddress(),
 'secure3dhash' => $HashData);
        
        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) { /* Handle error */ }
        
        var_dump($result);

        return $paymentModel;
    }

    
}


?>
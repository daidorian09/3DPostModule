<?php
class ThreeDPayment {
    private $_storeMode;
    private $_storeApiVersion;
    private $_storeType;
    private $_storeTerminalProvUserID;
    private $_storeAmount;
    private $_storeCurrencyCode;
    private $_storeInstallmentCount;
    private $_storeTerminalUserID;
    private $_storeOrderID;
    private $_storeCustomerIpAddress;
    private $_storeCustomerEmailAddress;
    private $_storeTerminalID;
    private $_storeTerminalID_;
    private $_storeTerminalMerchantID;
    private $_storeKey;
    private $_storeProvisionPassword;

    #region StoreMode Getter & Setter

    public function setStoreMode($storeMode)
    {
        $this->_storeMode = $storeMode;
    } 
    public function getStoreMode()
    {
        return $this->_storeMode;
    }

    #endregion

    #region StoreApiVersion Getter & Setter

    public function setStoreApiVersion($storeApiVersion)
    {
        $this->_storeApiVersion = $storeApiVersion;
    } 
    public function getStoreApiVersion()
    {
        return $this->_storeApiVersion;
    }

    #endregion

    #region StoreType Getter & Setter

    public function setStoreType($storeType)
    {
        $this->_storeType = $storeType;
    } 
    public function getStoreType()
    {
        return $this->_storeType;
    }

    #endregion

    #region StoreTerminalProvUserID Getter & Setter

    public function setStoreTerminalProvUserID($storeTerminalProvUserID)
    {
        $this->_storeTerminalProvUserID = $storeTerminalProvUserID;
    } 
    public function getStoreTerminalProvUserID()
    {
        return $this->_storeTerminalProvUserID;
    }

    #endregion

    #region StoreAmount Getter & Setter

    public function setStoreAmount($setStoreAmount)
    {
        $this->_storeAmount = $setStoreAmount;
    } 
    public function getStoreAmount()
    {
        return $this->_storeAmount;
    }

    #endregion

    #region StoreCurrencyCode Getter & Setter

    public function setStoreCurrencyCode($storeCurrencyCode)
    {
        $this->_storeCurrencyCode = $storeCurrencyCode;
    } 
    public function getStoreCurrencyCode()
    {
        return $this->_storeCurrencyCode;
    }

    #endregion

    #region StoreInstallmentCount Getter & Setter

    public function setStoreInstallmentCount($storeInstallmentCount)
    {
        $this->_storeInstallmentCount = $storeInstallmentCount;
    } 
    public function getStoreInstallmentCount()
    {
        return $this->_storeInstallmentCount;
    }

    #endregion

    #region StoreTerminalUserID Getter & Setter

    public function setStoreTerminalUserID($storeTerminalUserID)
    {
        $this->_storeTerminalUserID = $storeTerminalUserID;
    } 
    public function getStoreTerminalUserID()
    {
        return $this->_storeTerminalUserID;
    }

    #endregion

    #region StoreOrderID Getter & Setter

    public function setStoreOrderID($storeOrderID)
    {
        $this->_storeOrderID = $storeOrderID;
    } 
    public function getStoreOrderID()
    {
        return $this->_storeOrderID;
    }

    #endregion

     #region StoreCustomerIpAddress Getter & Setter

     public function setStoreCustomerIpAddress($storeCustomerIpAddress)
     {
         $this->_storeCustomerIpAddress = $storeCustomerIpAddress;
     } 
     public function getStoreCustomerIpAddress()
     {
         return $this->_storeOrderID;
     }
 
     #endregion

     #region StoreCustomerEmailAddress Getter & Setter

     public function setStoreCustomerEmailAddress($storeCustomerEmailAddress)
     {
         $this->_storeCustomerEmailAddress = $storeCustomerEmailAddress;
     } 
     public function getStoreCustomerEmailAddress()
     {
         return $this->_storeCustomerEmailAddress;
     }
 
     #endregion

     #region StoreTerminalID Getter & Setter

     public function setStoreTerminalID($storeTerminalID)
     {
         $this->_storeTerminalID = $storeTerminalID;
     } 
     public function getStoreTerminalID()
     {
         return $this->_storeTerminalID;
     }
 
     #endregion

     #region StoreTerminalID_ Getter & Setter

     public function setStoreTerminalID_($storeTerminalID_)
     {
         $this->_storeTerminalID_ = $storeTerminalID_;
     } 
     public function getStoreTerminalID_()
     {
         return $this->_storeTerminalID_;
     }
 
     #endregion

     #region StoreTerminalMerchantID Getter & Setter

     public function setStoreTerminalMerchantID($storeTerminalMerchantID)
     {
         $this->_storeTerminalMerchantID = $storeTerminalMerchantID;
     } 
     public function getStoreTerminalMerchantID()
     {
         return $this->_storeTerminalMerchantID;
     }
 
     #endregion

     #region StoreKey Getter & Setter

     public function setStoreKey($storeKey)
     {
         $this->_storeKey = $storeKey;
     } 
     public function getStoreKey()
     {
         return $this->_storeKey;
     }
 
     #endregion

     #region StoreProvisionPassword Getter & Setter

     public function setStoreProvisionPassword($storeProvisionPassword)
     {
         $this->_storeProvisionPassword = $storeProvisionPassword;
     } 
     public function getStoreProvisionPassword()
     {
         return $this->_storeProvisionPassword;
     }
 
     #endregion
    
}
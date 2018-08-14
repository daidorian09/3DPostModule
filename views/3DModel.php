<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>3D Pay</title>
</head>
<body>

<form method='post' action="" id='checkout-form' class="needs-validation" novalidate>
    <div class="form-group col-md-5">
    <label for="exampleFormControlSelect1">Payment Type</label>
    <select class="form-control" id="exampleFormControlSelect1" required>
      <option value='0'>3D Pay</option>
    </select>
    <div class="invalid-feedback">
          Please select a payment type
        </div>    
  </div>
  <div class="form-group col-md-7">
  <input class="form-check-input" type="checkbox" id="chck-inst">
  <label class="form-check-label" for="chck-inst-1">
    Installment Check
  </label>
</div>
<div class="form-group col-md-5" style="display:none;" id="chckbx-inst-type">
    <label for="lbl-chckbx-inst-type">Installments</label>
    <select class="form-control">
      <option value='1'>1</option>
      <option value='3'>3</option>
      <option value='6'>6</option>
      <option value='9'>9</option>
    </select>
  </div>
  <div class="form-group col-md-5" id="currency-type">
    <label for="lbl-currency-type">Installments</label>
    <select class="form-control" required>
      <option value='$'>Dolar</option>
      <option value='₺'>Turkish Lira</option>
      <option value='£'>Euro</option>
    </select>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Card Number</label>
    <div class="col-md-5">
      <input type="text" class="form-control" id="card-number" placeholder="Card Number" required>
    </div>
    <div class="invalid-feedback">
          Please select a valid car number
    </div>    
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Expire Date(Month)</label>
    <div class="col-md-5">
      <input type="text" class="form-control" id="card-number-mm" placeholder="Expire Date(Month)" required>
    </div>
    <div class="invalid-feedback">
          Please select a valid car number month
    </div> 
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Expire Date(Year)</label>
    <div class="col-md-5">
      <input type="text" class="form-control" id="card-number-yy" placeholder="Expire Date(Year)" required>
    </div>
    <div class="invalid-feedback">
          Please select a valid car number year
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">CVV2</label>
    <div class="col-md-5">
      <input type="text" class="form-control" id="cvv" placeholder="Security Code" required>
    </div>
    <div class="invalid-feedback">
          Please select a security code for card
    </div>
  </div>
  <div class="form-group row">
  <div class="col-md-5">
      <button type="submit" class="btn btn-primary">Checkout</button>
    </div>
  </div>
</form>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script>
$('#chck-inst').click(function(){
this.checked?$('#chckbx-inst-type').show(250):$('#chckbx-inst-type').hide(250); //time for show
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>


</html>


<!-- <form action="https://sanalposprov.garanti.com.tr/servlet/gt3dengine" method="post">
        3D Security Level: 
        <select name="secure3dsecuritylevel">
            <option value="3D_PAY">3D_PAY</option>
            <option value="3D_FULL">3D_FULL</option>
            <option value="3D_HALF">3D_HALF</option>
        </select>
        <br />
        Card Number: <input name="cardnumber" type="text" />
        <br />
        Expire Date (mm): <input name="cardexpiredatemonth" type="text" />
        <br />
        Expire Date (yy): <input name="cardexpiredateyear" type="text" />
        <br />
        CVV2: <input name="cardcvv2" type="text" />
        <br />
        <input id="submit" type="submit" value="��lemi G�nder" />
        <input type="hidden" name="mode" value="<?php  echo $strMode ?>" />
        <input type="hidden" name="apiversion" value="<?php  echo $strApiVersion ?>" />
        <input type="hidden" name="terminalprovuserid" value="<?php  echo $strTerminalProvUserID ?>" />
        <input type="hidden" name="terminaluserid" value="<?php  echo $strTerminalUserID ?>" />
        <input type="hidden" name="terminalmerchantid" value="<?php  echo $strTerminalMerchantID ?>" />
        <input type="hidden" name="txntype" value="<?php  echo $strType ?>" />
        <input type="hidden" name="txnamount" value="<?php  echo $strAmount ?>" />
        <input type="hidden" name="txncurrencycode" value="<?php  echo $strCurrencyCode ?>" />
        <input type="hidden" name="txninstallmentcount" value="<?php  echo $strInstallmentCount ?>" />
        <input type="hidden" name="orderid" value="<?php  echo $strOrderID ?>" />
        <input type="hidden" name="terminalid" value="<?php  echo $strTerminalID ?>" />
        <input type="hidden" name="successurl" value="<?php  echo $strSuccessURL ?>" />
        <input type="hidden" name="errorurl" value="<?php  echo $strErrorURL ?>" />
        <input type="hidden" name="customeripaddress" value="<?php  echo $strCustomeripaddress ?>" />
        <input type="hidden" name="customeremailaddress" value="<?php  echo $strcustomeremailaddress ?>" />
        <input type="hidden" name="secure3dhash" value="<?php  echo $HashData ?>" />
        <!---
        'Sipari�e y�nelik Fatura bilgilerini g�ndermek i�in ekteki opsiyonel alanlar kullan�labilir.
        'E�er birden �ok Fatura detay� g�nderilecekse orderaddresscount=2 yap�larak
        'T�m element isimlerindeki 1 rakam� 2 yap�lmal�d�r. �rn; orderaddresscity2 gibi...
        <input type="hidden" name="orderaddresscount" value="1" />
        <input type="hidden" name="orderaddresscity1" value="xxx" />
        <input type="hidden" name="orderaddresscompany1" value="xxx" />
        <input type="hidden" name="orderaddresscountry1" value="xxx" />
        <input type="hidden" name="orderaddressdistrict1" value="xxx" />
        <input type="hidden" name="orderaddressfaxnumber1" value="xxx" />
        <input type="hidden" name="orderaddressgsmnumber1" value="xxx" />
        <input type="hidden" name="orderaddresslastname1" value="xxx" />
        <input type="hidden" name="orderaddressname1" value="xxx" />
        <input type="hidden" name="orderaddressphonenumber1" value="xxx" />
        <input type="hidden" name="orderaddresspostalcode1" value="xxx" />
        <input type="hidden" name="orderaddresstext1" value="xxx" />
        <input type="hidden" name="orderaddresstype1" value="xxx" />
        --->
    </form> -->

    

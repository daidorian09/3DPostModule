<?php 
require_once("./Header.php"); 
require_once('../const/CurrencyConstants.php');
?>

<body>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-lg-7 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Checkout</h3>
                    </div>

                    <div class="panel-body">
                        <form id="cart-form" enctype="application/x-www-form-urlencoded" novalidate>

                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" />
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="paymentType">
                                    <option selected>Payment Types</option>
                                    <option value="1">3D Pay</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" id="chck-inst"> Show installments
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" style="display:none;" id='div-inst'>
                                <select class="form-control" name="installment">
                                    <option value="-1" selected>Installments</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="6">6</option>
                                    <option value="9">9</option>
                                    <option value="12">12</option>
                                </select>
                            </div>


                            <div class="form-group" style="margin-top:25px">
                                <input type="text" class="form-control" name="amount" id='amount' placeholder="Amount" />
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="currency">
                                    <option value="-1" selected>Available Currencies</option>
                                    <option value="<?=CurrencyConstants::USD;?>">$</option>
                                    <option value="<?=CurrencyConstants::TL;?>">TL</option>
                                    <option value="<?=CurrencyConstants::EURO;?>">£</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="expireDateMonth" placeholder="Expire Date(Month)" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="expireDateYear" placeholder="Expire Date(Year)" />
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="cardSecurityNumber" placeholder="Security Code" />
                            </div>

                            <div class="form-group">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary  col-lg-6 col-lg-offset-3">Checkout</button>
                            </div>

                            <div id="response" hidden style="margin-top:62px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>

    $(function () {
        $("#amount").maskMoney({
            thousands: ',',
            decimal: '.',
            allowZero: false,
            allowNegative: false
        });
    })


$(document).ready(function () {
        $('#chck-inst').click(function () {
            this.checked ? $('#div-inst').show(250) : $('#div-inst').hide(250); //time for show
        });



        $('#cart-form').bootstrapValidator().on('submit', function (e) {
            if (!e.isDefaultPrevented()) {
                $.ajax({
                    type: "POST",
                    url: 'http://localhost:8081/vpos/services/PaymentProcessorService.php',
                    data: $('#cart-form').serialize(),
                    success: function (data) {
                        var response = JSON.parse(data);
                        alert(response)
                        if (response.status) {
                            const data = response.data;
                            //    Object.keys(data).forEach(function(key) {
                            //         console.log(key, data[key]);
                            //     });

                            // $("#response").addClass("alert alert-success")+$("#response").html("<h4 class='col-md-offset-4'><strong>"+response.verifed+"</strong></h4>").show();
                        } else {
                            $("#response").addClass("alert alert-danger")+$("#response").html("<h4 class='col-md-offset-4'><strong>"+response.message+"</strong></h4>").show();     
                        }
                    },
                })
            }
        })
    })
    </script>
<?php
require_once("./Footer.php");
?>
$(document).ready(function () {
    $('#cart-form').bootstrapValidator({
        live: 'enabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            paymentType: {
                validators: {
                    notEmpty: {
                        message: 'Payment type is required and can\'t be empty'
                    }
                }
            },
            amount: {
                validators: {
                    notEmpty: {
                        message: 'Amount is required and can\'t be empty'
                    }
                }
            },
            currency: {
                validators: {
                    notEmpty: {
                        message: 'Currency is required and can\'t be empty'
                    }
                }
            },
            expireDateMonth: {
                validators: {
                    notEmpty: {
                        message: 'Card expire date month is required and can\'t be empty'
                    },
                    stringLength: {
                        max: 2,
                        message: 'Card expire date month requires 2 digit '
                    },
                    regexp: {
                        regexp: /^(0[1-9]|1[0-2])$/,
                        message: 'Card expire date month is invalid'
                    }
                }
            },
            expireDateYear: {
                validators: {
                    notEmpty: {
                        message: 'Card expire date year is required and can\'t be empty'
                    },
                    stringLength: {
                        max: 2,
                        message: 'Card expire date year requires 2 digit '
                    },
                    regexp: {
                        regexp: /^[0-9]{2}$/,
                        message: 'Card expire date year is invalid'
                    }
                }
            },
            cardSecurityNumber: {
                validators: {
                    notEmpty: {
                        message: 'Card security number is required and can\'t be empty'
                    },
                    stringLength: {
                        max: 3,
                        message: 'Card expire date year requires 3 digit '
                    },
                    regexp: {
                        regexp: /^[0-9]{3}$/,
                        message: 'Card security code is invalid'
                    }
                }
            }
        }
    });
});
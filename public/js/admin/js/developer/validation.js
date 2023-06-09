/* ---------------------------------- Manage Login ------------------------------------------- */
/*                                                                                             */
/* ---------------------------------- Manage Login ------------------------------------------- */

$(document).ready(function() {
    $('#adminlogin').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: '',
            invalid: '',
            validating: ''
        },
        fields: {
			password: {
                validators: {
                    notEmpty: {
                        message: 'Enter password'
                    }
                }
            },
			email:{
                validators: {
					notEmpty: {
                        message: 'Enter email'
                    },
                    emailAddress: {
                        message: 'Enter valid email'
                    }
                }
            },
        }
    });
});


/* ---------------------------------- Manage Forgot Password ------------------------------------------- */
/*                                                                                                       */
/* ---------------------------------- Manage Forgot Password ------------------------------------------- */

$(document).ready(function() {
    $('#adminforgot').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: '',
            invalid: '',
            validating: ''
        },
        fields: {
			email:{
                validators: {
					notEmpty: {
                        message: 'Enter email'
                    },
                    emailAddress: {
                        message: 'Enter valid email'
                    }
                }
            },
        }
    });
});


/* ---------------------------------- Manage Admin User ------------------------------------------- */
/*                                                                                                  */
/* ---------------------------------- Manage Admin User ------------------------------------------- */

$(document).ready(function() {
    $('#adminUser').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: '',
            invalid: '',
            validating: ''
        },
        fields: {
            first_name: {
                message: 'Enter first name',
                validators: {
                    notEmpty: {
                        message: 'Enter first name'
                    },
                    stringLength: {
                        max: 20,
                        message: 'The first name must be less than 20 characters'
                    }
                }
            },
			last_name: {
                message: 'Enter last name',
                validators: {
                    notEmpty: {
                        message: 'Enter last name'
                    },
                    stringLength: {
                        max: 20,
                        message: 'The last name must be less than 20 characters'
                    }
                }
            },
			phone: {
                validators: {
                    stringLength: {
                        min: 10,
                        message: 'phone number must be 10 characters'
                    }
                }
            },
			role_id: {
                validators: {
                    notEmpty: {
                        message: 'Select role'
                    }
                }
            },
			password: {
                validators: {
                    notEmpty: {
                        message: 'Enter password'
                    }
                }
            },
			email:{
                validators: {
					notEmpty: {
                        message: 'Enter email'
                    },
                    emailAddress: {
                        message: 'Enter valid email'
                    }
                }
            },
        }
    });
});


$(document).ready(function() {
    $('#editUser').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: '',
            invalid: '',
            validating: ''
        },
        fields: {
            first_name: {
                message: 'Enter first name',
                validators: {
                    notEmpty: {
                        message: 'Enter first name'
                    },
                    stringLength: {
                        max: 20,
                        message: 'The first name must be less than 20 characters'
                    }
                }
            },
			last_name: {
                message: 'Enter last name',
                validators: {
                    notEmpty: {
                        message: 'Enter last name'
                    },
                    stringLength: {
                        max: 20,
                        message: 'The last name must be less than 20 characters'
                    }
                }
            },
			phone: {
                validators: {
                    stringLength: {
                        min: 10,
                        message: 'phone number must be 10 characters'
                    }
                }
            },
			role_id: {
                validators: {
                    notEmpty: {
                        message: 'Select role'
                    }
                }
            },
			email:{
                validators: {
					notEmpty: {
                        message: 'Enter email'
                    },
                    emailAddress: {
                        message: 'Enter valid email'
                    }
                }
            },
        }
    });
});



$(document).ready(function() {
    $('#adminCustomer').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: '',
            invalid: '',
            validating: ''
        },
        fields: {
            first_name: {
                message: 'Enter first name',
                validators: {
                    notEmpty: {
                        message: 'Enter first name'
                    },
                    stringLength: {
                        max: 20,
                        message: 'The first name must be less than 20 characters'
                    }
                }
            },
			last_name: {
                message: 'Enter last name',
                validators: {
                    notEmpty: {
                        message: 'Enter last name'
                    },
                    stringLength: {
                        max: 20,
                        message: 'The last name must be less than 20 characters'
                    }
                }
            },
			phone: {
                validators: {
                    stringLength: {
                        min: 10,
                        message: 'phone number must be 10 characters'
                    }
                }
            },
			password: {
                validators: {
                    notEmpty: {
                        message: 'Enter password'
                    }
                }
            },
			email:{
                validators: {
					notEmpty: {
                        message: 'Enter email'
                    },
                    emailAddress: {
                        message: 'Enter valid email'
                    }
                }
            },
        }
    });
});


$(document).ready(function() {
    $('#editCustomer').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: '',
            invalid: '',
            validating: ''
        },
        fields: {
            first_name: {
                message: 'Enter first name',
                validators: {
                    notEmpty: {
                        message: 'Enter first name'
                    },
                    stringLength: {
                        max: 20,
                        message: 'The first name must be less than 20 characters'
                    }
                }
            },
			last_name: {
                message: 'Enter last name',
                validators: {
                    notEmpty: {
                        message: 'Enter last name'
                    },
                    stringLength: {
                        max: 20,
                        message: 'The last name must be less than 20 characters'
                    }
                }
            },
			phone: {
                validators: {
                    stringLength: {
                        min: 10,
                        message: 'phone number must be 10 characters'
                    }
                }
            },
			email:{
                validators: {
					notEmpty: {
                        message: 'Enter email'
                    },
                    emailAddress: {
                        message: 'Enter valid email'
                    }
                }
            },
        }
    });
});
/* ---------------------------------- Manage Admin User ------------------------------------------- */
/*                                                                                                  */
/* ---------------------------------- Manage Admin User ------------------------------------------- */


$(document).ready(function() {
    $('#register').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: '',
            invalid: '',
            validating: ''
        },
        fields: {
            first_name: {
                message: 'Enter first name',
                validators: {
                    notEmpty: {
                        message: 'Enter first name'
                    },
                    stringLength: {
                        max: 20,
                        message: 'The first name must be less than 20 characters'
                    }
                }
            },
			last_name: {
                message: 'Enter last name',
                validators: {
                    notEmpty: {
                        message: 'Enter last name'
                    },
                    stringLength: {
                        max: 20,
                        message: 'The last name must be less than 20 characters'
                    }
                }
            },
			password: {
                message: 'Enter Password',
                validators: {
                    notEmpty: {
                        message: 'Enter Password'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The password must be greater than 6 characters'
                    }
                }
            },
			confirm_password: {
                message: 'Enter confirm password',
                validators: {
                    notEmpty: {
                        message: 'Enter confirm password'
                    },
                    stringLength: {
                        min: 6,
                        message: 'The confirm password must be greater than 6 characters'
                    }
                }
            },
			phone: {
                validators: {
                    stringLength: {
                        min: 10,
                        message: 'phone number must be 10 characters'
                    }
                }
            },
			email:{
                validators: {
					notEmpty: {
                        message: 'Enter email'
                    },
                    emailAddress: {
                        message: 'Enter valid email'
                    }
                }
            }
        }
    });
});


$(document).ready(function() {
    $('#login').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: '',
            invalid: '',
            validating: ''
        },
        fields: {
			email:{
                validators: {
					notEmpty: {
                        message: 'Enter email'
                    },
                    emailAddress: {
                        message: 'Enter valid email'
                    }
                }
            },
            password:{
                validators: {
					notEmpty: {
                        message: 'Enter Password'
                    }
                }
            }
        }
    });
});
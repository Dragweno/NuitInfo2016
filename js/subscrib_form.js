$(document).ready(function() {
    $('form').submit(validation)
    $('.help-block').each(function(){
        $(this).hide();
    })
});

function validation(event) {
    
    event.preventDefault();
        
    var regexName = /^[a-zA-Z ]+$/
    var regexEmail = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/
    var regexPwd = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/
    var regexAddress = /^[0-9a-zA-Z ]+$/
    var regexPostalCode = /[0-9]{5}/
    var regexCity = /^[a-zA-Z ]+$/
    
    var civility = document.getElementById("input_register_civility");
    var name = document.getElementById("input_register_name");
    var firstname = document.getElementById("input_register_firstname");
    var email = document.getElementById("input_register_email");
    var password = document.getElementById("input_register_password");
    var passwordconfirm = document.getElementById("input_register_passwordconfirm");
    var address = document.getElementById("input_register_address");
    var postalcode = document.getElementById("input_register_postalcode");
    var city = document.getElementById("input_register_city");
    
    //Variable de confirmation de la bonne saisie des informations
    var bool = true;

    if (name && regexName.test(name.value)) {
        $('#input_register_name').parent().parent().removeClass('has-error');
        $('#input_register_name').parent().parent().addClass('has-success');
        $('#input_register_name').parent().parent().find('span').hide();
    } else {
        $('#input_register_name').parent().parent().removeClass('has-success');
        $('#input_register_name').parent().parent().addClass('has-error');
        $('#input_register_name').parent().parent().find('span').show();
        bool = false;
    }
    if (firstname && regexName.test(firstname.value)) {
        $('#input_register_firstname').parent().parent().removeClass('has-error');
        $('#input_register_firstname').parent().parent().addClass('has-success');
        $('#input_register_firstname').parent().parent().find('span').hide();
    } else {
        $('#input_register_firstname').parent().parent().removeClass('has-success');
        $('#input_register_firstname').parent().parent().addClass('has-error');
        $('#input_register_firstname').parent().parent().find('span').show();
        bool = false;
    } 
    if (email && regexEmail.test(email.value)) {
        $('#input_register_email').parent().parent().removeClass('has-error');
        $('#input_register_email').parent().parent().addClass('has-success');
        $('#input_register_email').parent().parent().find('span').hide();
    } else {
        $('#input_register_email').parent().parent().removeClass('has-success');
        $('#input_register_email').parent().parent().addClass('has-error');
        $('#input_register_email').parent().parent().find('span').show();
        bool = false;
    }
    if (password && regexPwd.test(password.value)) {
        $('#input_register_password').parent().parent().removeClass('has-error');
        $('#input_register_password').parent().parent().addClass('has-success');
        $('#input_register_password').parent().parent().find('span').hide();
    } else {
        $('#input_register_password').parent().parent().removeClass('has-success');
        $('#input_register_password').parent().parent().addClass('has-error');
        $('#input_register_password').parent().parent().find('span').show();
        bool = false;
    }
    if (passwordconfirm && passwordconfirm.value != "" && passwordconfirm.value == password.value) {
        $('#input_register_passwordconfirm').parent().parent().removeClass('has-error');
        $('#input_register_passwordconfirm').parent().parent().addClass('has-success');
        $('#input_register_passwordconfirm').parent().parent().find('span').hide();
    } else {
        $('#input_register_passwordconfirm').parent().parent().removeClass('has-success');
        $('#input_register_passwordconfirm').parent().parent().addClass('has-error');
        $('#input_register_passwordconfirm').parent().parent().find('span').show();
        bool = false;
    }
    if (address && regexAddress.test(address.value)) {
        $('#input_register_address').parent().parent().removeClass('has-error');
        $('#input_register_address').parent().parent().addClass('has-success');
        $('#input_register_address').parent().parent().find('span').hide();
    } else {
        $('#input_register_address').parent().parent().removeClass('has-success');
        $('#input_register_address').parent().parent().addClass('has-error');
        $('#input_register_address').parent().parent().find('span').show();
        bool = false;
    }
    if (postalcode && regexPostalCode.test(postalcode.value)) {
        $('#input_register_postalcode').parent().parent().removeClass('has-error');
        $('#input_register_postalcode').parent().parent().addClass('has-success');
        $('#input_register_postalcode').parent().parent().find('span').hide();
    } else {
        $('#input_register_postalcode').parent().parent().removeClass('has-success');
        $('#input_register_postalcode').parent().parent().addClass('has-error');
        $('#input_register_postalcode').parent().parent().find('span').show();
        bool = false;
    }
    if (city && regexCity.test(city.value)) {
        $('#input_register_city').parent().parent().removeClass('has-error');
        $('#input_register_city').parent().parent().addClass('has-success');
        $('#input_register_city').parent().parent().find('span').hide();
    } else {
        $('#input_register_city').parent().parent().removeClass('has-success');
        $('#input_register_city').parent().parent().addClass('has-error');
        $('#input_register_city').parent().parent().find('span').show();
        bool = false;
    }
    
    if(bool){
        console.log("test");
    	this.submit();
    }
    
}

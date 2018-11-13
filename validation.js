function validateForm() {
    var email = document.forms["regForm"]["email"];
        if (email.value == "") {
         alert("Please input your email address");
         email.focus();
        return false;
    }
    var firstname = document.regForm.firstname;
        if (firstname.value == "") {
        alert("Please input your first name");
        firstname.focus();
        return false;
    }
    var lastname = document.regForm.lastname;
        if (lastname.value == "") {
        alert("Please input your last name");
        lastname.focus();
        return false;
    }
    var password = document.regForm.password;
        if (password.value == "") {
        alert("Please input your password");
        password.focus();
        return false;
    }
    var phone = document.myForm.phone
        if (phone.value == "" || isNaN(phone.value)) {
        alert("Phone number should be numeric.");
         phone.focus();
        return false;
    }
        if (phone.value.length != 11) {
        alert( "Phone number should be exactly 11 digits.");
        phone.focus();
        return false;
    }
        var gender = document.regForm.gender;
        if (gender.value == "-1") {
        alert("Please select your gender");
        return false;
    }
        return true;
    }
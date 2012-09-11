/*jslint browser :true */
function validateName() {
    "use strict";
    var name = document.form1.firstname.value, pattern = /^[a-z\.\_-]{3,30}$/;
    if (name === null || name === "") {
        alert("Name must be filled out");
        return false;
    }
    if (pattern.test(name) === false) {
        alert("Inavalid format for name");
        return false;
    }
}

function validateAge() {
    "use strict";
    var age = document.form1.num.value;
    if (age === null || age === "") {
        alert("Age must be filled out");
        return false;
    }
    if (age > 120 || isNaN(age)) {
        alert("Enter a valid age");
        return false;
    }
}

function validateAddress() {
    "use strict";
    var address = document.form1.adrs.value, len = address.length;
    if (address === null || address === "") {
        alert("Address must be filled out");
        return false;
    }
    if (len < 10 || len > 500) {
        alert("Address is out of limit(lower/upper)");
        return false;
    }
}

function validateEmail() {
    "use strict";
    var mail = document.form1.mail_adrs.value, atpos = mail.indexOf("@"), dotpos = mail.lastIndexOf(".");
    if (mail === null || mail === "") {
        alert("E-mail must be filled out");
        return false;
    }
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= mail.length) {
        alert("Not a valid e-mail address.Enter in format like abc@abc.com");
        return false;
    }
}

function validatecc() {
    "use strict";
    var code = document.form1.countrycode.value;
    if (code === null || code === "") {
        alert("Country code must be filled out");
        return false;
    }
    if (code > 999 || code < 99 || isNaN(code)) {
        alert("Invalid Country Code has been entered!");
        return false;
    }
}

function validatePhoneNumber() {
    "use strict";
    var number = document.form1.fne_num.value;
    if (number === null || number === "") {
        alert("Phone number must be filled out");
        return false;
    }
    if (isNaN(number)) {
        alert("Invalid phone number has been entered!");
        return false;
    }
}

function validatecolor() {
    "use strict";
    var selectboxObj = document.form1.fav_clr.value;
    if (!selectboxObj) {
        alert("Select atleast one colour");
        return false;
    }
}

function validateimage() {
    "use strict";
    var uploadcontrol = document.form1.img.value, temp = document.form1.img, extension = temp.value.substring(temp.value.lastIndexOf('.') + 1);
    if (uploadcontrol === "" || uploadcontrol === null) {
        alert("Image cannot be empty!");
        return false;
    }
    if (extension === "png" || extension === "PNG" || extension === "JPEG" || extension === "jpeg" || extension === "jpg" || extension === "JPG") {
        return true;
    } else {
        alert("Upload png or jpeg images only");
        return false;
    }
}

function validateform() {
    "use strict";
    validateName();
    validateAge();
    validateAddress();
    validateEmail();
    validatecc();
    validatePhoneNumber();
    validateimage();
    validatecolor();
    return false;
}
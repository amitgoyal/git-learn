  
    var gender_value = document.main_form.u_gender.value;
    
    var language_value = document.main_form.u_language.value;  
    /*alert(id_value);
    alert(password_value);
    alert(name_value);
    alert(date_value);
    alert(month_value);
    alert(year_value);
    alert(gender_value);
    alert(email_value);
    alert(address_value);
    alert(code_value);
    alert(phone_value);
    alert(language_value);*/
    function userid_validation() {
        var id_value = document.main_form.u_id.value;
        if (id_value == ""){
             alert("User id must have a value");
             return false;
        }
        var numeric = /^[0-9]+$/;
        var check_id = document.main_form.u_id.value.match(numeric);
        if (check_id == null){
            alert("User ID must have only numeric characters");
        }
    }
    function password_validation(){
        var password_value = document.main_form.u_password.value;
        if (password_value == ""){
             alert("Password must have a value");
             return false;
        }
        if (u_password.length < 6){
             alert("Password must have atleast 6 characters");
        }
    }
    function name_validation(){
        var name_value = document.main_form.u_name.value;
        if (name_value == ""){
             alert("Name must have a value");
             return false;
        }
        var alpha = /^[a-zA-Z0-9]+$/;
        var check_name = document.main_form.u_name.value.match(alpha);
        if (check_name == null){
            alert("Name must have alphabets or numbers");
        }
    }
    function date_validation(){
        var date_value = document.main_form.u_date.value;
        if (date_value == ""){
             alert("Date must have a value");
             return false;
        }
        var numeric = /^[0-9]+$/;
        var check_date = document.main_form.u_date.value.match(numeric);
        if ((check_date == null)){
            alert("Invalid Date. Date must have only numeric characters");
            return false;
        }
        if (date_value<1 && date_value>31){
            alert("Invalid date. Date must have a value between 1-12");
        }
    }  
    
    function month_validation(){
        var month_value = document.main_form.u_month.value;
        if (month_value == ""){
            alert("Month must have a value");
            return false;
        }
        var numeric = /^[0-9]+$/;
        var check_month = document.main_form.u_month.value.match(numeric);
        if ((check_month == null)){
            alert("Invalid Month. Month must have only numeric characters");
            return false;
        }
        /*if (month_value<1 && month_value>12){
            alert("Invalid month. Month must have a value between 1-12");
        }*/
    }
    function year_validation(){
        var year_value = document.main_form.u_year.value;
        if (year_value == ""){
            alert("Year must have a value");
            return false;
        }
            var numeric = /^[0-9]+$/;
            var check_year = document.main_form.u_year.value.match(numeric);
            if ((check_year == null)){
            alert("Invalid Year. Year must have only numeric characters");
            return false;
        }
        if (u_year.length>4)
            {
                alert("Invalid year.");
            }
    }
        
    function email_validation(){
        var email_value = document.main_form.u_email.value;
        var atpos = email_value.indexOf("@");
        var dotpos = email_value.lastIndexOf(".");
        if (email_value == null || email_value == "") {
        alert("E-mail must have a value");
        return false();  
        }
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Invalid email. Please enter a valid email");
        }
    }
    function address_validation(){
        var address_value = document.main_form.u_address.value;
        if (address_value == ""){
        alert("Address must have a value");
        return false;
        }
        
    }
    
function code_validation(){
    var code_value = document.main_form.u_code.value;
    if (code_value == ""){
    alert("Country code must have a value");
    return false;
    }
    var numeric = /^[0-9]+$/;
    var check_code = document.main_form.u_code.value.match(numeric);
    if ((check_code == null) ) {
            alert("Invalid Country Code. Country Code. must contain only numeric characters");
        }
}
   
function phone_validation(){
    var phone_value = document.main_form.u_phone.value;
    if (phone_value == ""){
    alert("Phone no. must have a value");
    return false;
    }
    var numeric = /^[0-9]+$/;
     var check_phone = document.main_form.u_phone.value.match(numeric);
     if ((check_phone == null) ) {
            alert("Invalid Phone No. Phone No. must contain only numeric characters");
        }
}
   
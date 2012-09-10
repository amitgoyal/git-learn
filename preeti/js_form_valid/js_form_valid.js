/*jslint browser :true */
function form_validation() {
    "use strict";
    var id_value, password_value, fname_value, lname_value, date_value, month_value, year_value, get_gender, email_value, address_value, country_value, code_value, phone_value, get_skill, get_file, check_id, check_fname, check_lname, check_date, check_month, check_year, check_code, check_phone, atpos, dotpos, flag_chk, flag_radio, i, numeric, alpha, file_ext, file_size;
    id_value = document.main_form.u_id.value;
    password_value = document.main_form.u_password.value;
    fname_value = document.main_form.u_fname.value;
    lname_value = document.main_form.u_lname.value;
    date_value = document.main_form.u_date.value;
    month_value = document.main_form.u_month.value;
    year_value = document.main_form.u_year.value;
    get_gender = document.main_form.u_gender;
    email_value = document.main_form.u_email.value;
    address_value = document.main_form.u_address.value;
    country_value = document.main_form.u_country.value;
    code_value = document.main_form.u_code.value;
    phone_value = document.main_form.u_phone.value;
    get_skill = document.main_form.u_skill;
    get_file = document.main_form.u_file;
    numeric = /^[0-9]+$/;
    alpha = /^[a-zA-Z]+$/;
    alert(id_value);
    alert(password_value);
    alert(fname_value);
    alert(lname_value);
    alert(date_value);
    alert(month_value);
    alert(year_value);
    for (i = 0; i < get_gender.length; i = i + 1) {
        if (get_gender[i].checked) {
            alert(get_gender[i].value);
        }
    }
    alert(email_value);
    alert(address_value);
    alert(country_value);
    alert(code_value);
    alert(phone_value);
    for (i = 0; i < get_skill.length; i = i + 1) {
        if (get_skill[i].checked) {
            alert(get_skill[i].value);
        }
    }
    if (id_value === "") {
        alert("User id must have a value");
        document.main_form.u_id.focus();
        return false;
    }
    check_id = id_value.match(numeric);
    if (check_id === null) {
        alert("User ID must have only numeric characters");
        document.main_form.u_id.focus();
        return false;
    }
    if (password_value === "") {
        alert("Password must have a value");
        document.main_form.u_password.focus();
        return false;
    }
    if (password_value.length < 8) {
        alert("Password must have atleast 8 characters");
        document.main_form.u_password.focus();
        return false;
    }
    if (fname_value === "") {
        alert("First Name must have a value");
        document.main_form.u_fname.focus();
        return false;
    }
    check_fname = fname_value.match(alpha);
    if (check_fname === null) {
        alert("First Name must have only alphabetic characters");
        document.main_form.u_fname.focus();
        return false;
    }
    if (lname_value === "") {
        alert("Last Name must have a value");
        document.main_form.u_lname.focus();
        return false;
    }
    check_lname = lname_value.match(alpha);
    if (check_lname === null) {
        alert("Last Name must have only alphabetic characters");
        document.main_form.u_lname.focus();
        return false;
    }
    if (date_value === "") {
        alert("Date must have a value");
        document.main_form.u_date.focus();
        return false;
    }
    check_date = date_value.match(numeric);
    if ((check_date === null)) {
        alert("Invalid Date. Date must have only numeric characters");
        document.main_form.u_date.focus();
        return false;
    }
    if ((date_value < 1) || (date_value > 31)) {
        alert("Invalid date. Date must have a value between 1-31");
        document.main_form.u_date.focus();
        return false;
    }
    if (month_value === "") {
        alert("Month must have a value");
        document.main_form.u_month.focus();
        return false;
    }
    check_month = month_value.match(numeric);
    if ((check_month === null)) {
        alert("Invalid Month. Month must have only numeric characters");
        document.main_form.u_month.focus();
        return false;
    }
    if ((month_value < 1) || (month_value > 12)) {
        alert("Invalid month. Month must have a value between 1-12");
        document.main_form.u_month.focus();
        return false;
    }
    if (year_value === "") {
        alert("Year must have a value");
        document.main_form.u_year.focus();
        return false;
    }
    check_year = year_value.match(numeric);
    if ((check_year === null)) {
        alert("Invalid Year. Year must have only numeric characters");
        document.main_form.u_year.focus();
        return false;
    }
    if (year_value.length !== 4) {
        alert("Invalid year. Year must be in yyyy format");
        document.main_form.u_year.focus();
        return false;
    }
    flag_radio = 0;
    for (i = 0; i < get_gender.length; i = i + 1) {
        if (get_gender[i].checked) {
            flag_radio = 1;
        }
    }
    if (flag_radio === 0) {
        alert("Please select gender");
        return false;
    }
    flag_chk = 0;
    for (i = 0; i < get_skill.length; i = i + 1) {
        if (get_skill[i].checked) {
            flag_chk = 1;
        }
    }
    if (flag_chk === 0) {
        alert("Please enter atleast one skill");
        return false;
    }
    if (address_value === "") {
        alert("Address must have a value");
        document.main_form.u_address.focus();
        return false;
    }
    if (country_value === "Select your Country") {
        alert("Please select country from the list");
        return false;
    }
    if (code_value === "") {
        alert("Country code must have a value");
        document.main_form.u_code.focus();
        return false;
    }
    check_code = code_value.match(numeric);
    if ((check_code === null)) {
        alert("Invalid Country Code. Country Code. must contain only numeric characters");
        document.main_form.u_code.focus();
        return false;
    }
    if (code_value.length > 3) {
        alert("Invalid Country code");
        document.main_form.u_code.focus();
        return false;
    }
    if (phone_value === "") {
        alert("Phone no. must have a value");
        document.main_form.u_phone.focus();
        return false;
    }
    check_phone = phone_value.match(numeric);
    if ((check_phone === null)) {
        alert("Invalid Phone No. Phone No. must contain only numeric characters");
        document.main_form.u_phone.focus();
        return false;
    }
    atpos = email_value.indexOf("@");
    dotpos = email_value.lastIndexOf(".");
    if (email_value === null || email_value === "") {
        alert("E-mail must have a value");
        document.main_form.u_email.focus();
        return false;
    }
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email_value.length) {
        alert("Invalid email. Please enter a valid email. For ex. john@abc.com");
        document.main_form.u_email.focus();
        return false;
    }
    if (get_file.value === "") {
        alert("Please upload your photograph");
        document.main_form.u_file.focus();
        return false;
    }
    file_ext = get_file.value.substring(get_file.value.lastIndexOf('.') + 1);
    alert(file_ext);
    if (file_ext === "png" || file_ext === "PNG" || file_ext === "JPEG" || file_ext === "jpeg" || file_ext === "jpg" || file_ext === "JPG") {
        return true;
    } else {
        alert("Upload png or jpeg images only");
        document.main_form.u_file.focus();
        return false;
    }
    /*file_size = get_file.value.size;
        alert("file size " + file_size);
    if (file_size > 50000) {
        alert("Maximum size of file must not exceed 50 kb");
        document.main_form.u_file.focus();
        return false;
    }*/
}
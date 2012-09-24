/*jslint browser :true */
function check_validation() {
    "use strict";
    var numeric, txt1, txt2, i, flag;
    numeric = /^[0-9]+$/;
    txt1 = document.form_prime.first_num.value.match(numeric);
    txt2 = document.form_prime.second_num.value.match(numeric);
    flag = 0;
    if (txt1 === null) {
        document.form_prime.first_num.value = "";
        flag = 1;
    }
    if (txt2 === null) {
        document.form_prime.second_num.value = "";
        flag = 1;
    }
    if (flag === 1) {
        alert("Alphabets or special symbols are not allowed");
        return false;
    }
}
function check_prime() {
    "use strict";
    var num1, num2, i, j, flag, sqroot;
    var str = new String();
    num1 = document.form_prime.first_num.value;
    num2 = document.form_prime.second_num.value;
    for (i = num1; i < num2; i = i + 1) {
        flag = 0;
    }
    sqroot = Math.sqrt(i);
    for (j = 2; j <= sqroot; j = j + 1) {
        if (i % j === 0) {
            flag = 1;
            break;
        }
    }
    if ((flag === 0) && (i !== 1)) {
        str = str + i + " ";
    }
    alert(str);
    document.form_prime.result.value = str;
}
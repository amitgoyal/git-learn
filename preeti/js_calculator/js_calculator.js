/*jslint browser :true */
/*global HTMLElement */
var num1, num2, answer, txt1, txt2, flag;
function add() {
    "use strict";
    num1 = parseInt(document.calculator_form.first_num.value, 10);
    num2 = parseInt(document.calculator_form.second_num.value, 10);
    answer = num1 + num2;
    document.calculator_form.result.value = answer;
}
function subtract() {
    "use strict";
    num1 = parseInt(document.calculator_form.first_num.value, 10);
    num2 = parseInt(document.calculator_form.second_num.value, 10);
    answer = num1 - num2;
    document.calculator_form.result.value = answer;
}
function multiply() {
    "use strict";
    num1 = parseInt(document.calculator_form.first_num.value, 10);
    num2 = parseInt(document.calculator_form.second_num.value, 10);
    answer = num1 * num2;
    document.calculator_form.result.value = answer;
}
function divide() {
    "use strict";
    num1 = parseInt(document.calculator_form.first_num.value, 10);
    num2 = parseInt(document.calculator_form.second_num.value, 10);
    answer = num1 / num2;
    document.calculator_form.result.value = answer;
}
function check_validation() {
    "use strict";
    var numeric = /^[0-9]+$/;
    txt1 = document.calculator_form.first_num.value.match(numeric);
    txt2 = document.calculator_form.second_num.value.match(numeric);
    flag = 0;
    if (txt1 === null) {
        document.calculator_form.first_num.value = "";
        flag = 1;
    }
    if (txt2 === null) {
        document.calculator_form.second_num.value = "";
        flag = 1;
    }
    if (flag === 1) {
        alert("Alphabets or special symbols are not allowed");
        return false;
    }
}
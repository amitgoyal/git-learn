var num1, num2, answer;  

function add()
{  
   num1 = parseInt(document.calculator_form.first_num.value);
   num2 = parseInt(document.calculator_form.second_num.value);
   answer = num1 + num2;
   document.calculator_form.result.value = answer;
}

function subtract()
{   
    num1 = parseInt(document.calculator_form.first_num.value);
    num2 = parseInt(document.calculator_form.second_num.value);
    answer = num1 - num2;
    document.calculator_form.result.value = answer;
}

function multiply()
{  
    num1 = parseInt(document.calculator_form.first_num.value);
    num2 = parseInt(document.calculator_form.second_num.value);   
    answer = num1 * num2;
    document.calculator_form.result.value = answer;
}

function divide()
{   num1 = parseInt(document.calculator_form.first_num.value);
    num2 = parseInt(document.calculator_form.second_num.value);
    answer = num1 / num2;
    document.calculator_form.result.value = answer;
}

function check_validation()
{
var numeric = /^[0-9]+$/;
var txt1 = document.calculator_form.first_num.value.match(numeric);
var txt2 = document.calculator_form.second_num.value.match(numeric);
var flag = 0;

if (txt1 == null){
        document.calculator_form.first_num.value = "";
        flag = 1;
    }
if (txt2 == null) {
        document.calculator_form.second_num.value = "";  
        flag = 1; 
    }     
 if (flag == 1) {
        alert("Alphabets or special symbols are not allowed");
        return false;    
    }  
        
}          
        
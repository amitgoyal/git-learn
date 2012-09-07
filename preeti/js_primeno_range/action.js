function check_validation()
{
var numeric = /^[0-9]+$/;
var txt1 = document.form_prime.first_num.value.match(numeric);
var txt2 = document.form_prime.second_num.value.match(numeric);
var flag = 0;

if (txt1 == null){
        document.form_prime.first_num.value = "";
        flag = 1;
    }
if (txt2 == null) {
        document.form_prime.second_num.value = "";  
        flag = 1; 
    }     
 if (flag == 1) {
        alert("Alphabets or special symbols are not allowed");
        return false;    
    }  
       
}
function check_prime()
{
    var num1, num2;
    num1 = document.form_prime.first_num.value;
    num2 = document.form_prime.second_num.value;
    var str = "";   
    for(var i=num1; i<num2; i++){
    var flag=0; 
        for(var j=2; j<=Math.sqrt(i); j++){
            if (i%j == 0){
                 flag=1;
                 break;
                } 
            else {
                flag = 0;
               }             
          }
        if (flag == 0){
         str = str + " " + i;
        }
      }
    document.form_prime.result.value = str;
}
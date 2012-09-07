function prime()
{
var i,j,flag;
var a = document.form1.num1.value;
var b = document.form1.num2.value;
var total = 0;
var str = "";
for(i=a; i<b; i++)
{
 flag = 1;
 for(j=2; j<i; j++)
  {
  if((i%j) == 0) {
   flag = 0;
   break;
   }
  }
 if(flag == 1) {
  total += 1; 
  str = str + " " + i;
 }
}
document.form1.result.value = str;
alert("There are " + total + " prime numbers in this range");
}
function validate() {
    var a = document.form.firstnum.value;
    var b = document.form.secondnum.value;
     if ( isNaN(a) ) {
      alert(" Invalid format ");     
     document.form.firstnum.value = " ";
     }
    else if ( isNaN(b) ) {
     alert (" Invalid format ");
     document.form.secondnum.value = " ";
     }
 } 

function add() {
    var name1 = parseInt(document.form.firstnum.value);
    var name2 = parseInt(document.form.secondnum.value);
    var a = (name1 + name2);
    document.form.result.value = a;
}
function subtract() {
    var name1 = document.form.firstnum.value;
    var name2 = document.form.secondnum.value;
    var a = name1 - name2;
    document.form.result.value = a; 
}
function multiply() {
var name1 = document.form.firstnum.value;
var name2 = document.form.secondnum.value;
var a = (name1 * name2);
document.form.result.value = a;
}
function divide() {
var name1 = document.form.firstnum.value;
var name2 = document.form.secondnum.value;
var a = (name1 / name2);
document.form.result.value = a;
}
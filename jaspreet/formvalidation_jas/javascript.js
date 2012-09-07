function validateName()
{
var name = document.form1.firstname.value;
if (name == null || name == "") {
  alert("Name must be filled out");  
  return false();
} 
  var pattern = /^[a-z\.\_-]{3,30}$/;
  if(pattern.test(name) == false) {
      alert("Inavalid format for name");
      }
    }

function validateAge()
{
var age = document.form1.num.value;
if (age == null || age == "")
  {
  alert("Age must be filled out"); 
  return false();
  }
if(age > 120 || isNaN(age)) {
    alert("Enter a valid age");
   }  
}

function validateAddress()
{
var address = document.form1.adrs.value;
if (address == null || address == "") {
  alert("Address must be filled out"); 
   return false();
}
var len = address.length;
if (len < 10 || len > 500) {
    alert("Address is out of limit(lower/upper)");  
    return false();
   }
}

function validateEmail()
{
var mail = document.form1.mail_adrs.value;
var atpos = mail.indexOf("@");
var dotpos = mail.lastIndexOf(".");
if (mail == null || mail == "") {
  alert("E-mail must be filled out");
  return false();  
}
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
  alert("Not a valid e-mail address");
  }
}

function validatecc()
{
var code = document.form1.countrycode.value;
if (code == null || code == "") {
  alert("Country code must be filled out");
  return false();
  }
if(code > 999 || code < 99 || isNaN(code)) {
    alert("Invalid Country Code has been entered!")  
}
}

function validatePhoneNumber()
{
var number = document.form1.fne_num.value;
if (number == null || number == "") {
  alert("Phone number must be filled out");
  return false();
  }
if( isNaN(number) ) {
    alert("Invalid phone number has been entered!")  
}
}

function validatecolor()
{
alert("validating color");
var selectboxObj = document.form1.fav_clr.value;
    if(!selectboxObj) {
        alert ("Select atleast something");
    }

}

function validateImage()
{
alert("validating image");
var uploadcontrol = document.form1.img.value;
var reg = /^(([a-zA-Z]:)|(\\{2}\w+)\$?)(\\(\w[\w].*))+(.jpg|.JPG|.gif|.GIF| .png|.PNG)$/;
if (uploadcontrol == "" || uploadcontrol == null) {
    alert("Image cannot be empty!");
   return false();
   }
if (reg.test(uploadcontrol))
{
alert("Only image(.png .jpeg .gif) files are allowed!");
}
}

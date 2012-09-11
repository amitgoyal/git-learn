function message()
{
var i,j,flag;
var txt1 = document.form.text1.value;
var word1 = txt1.split(" ");
var str = "";
var txt2 = document.form.text2.value;
var word2 = txt2.split(" ");

for(i=0; i<word1.length; i++)
    {
        flag = 0;
        for(j=0; j<word2.length; j++)
            {      
             if(word1[i] == word2[j]) {
                flag = 1;
              }
            }            
           if(flag == 0) {    
             str = str + " " + word1[i];
            }
   }
  
  document.form.text3.value = str;
}



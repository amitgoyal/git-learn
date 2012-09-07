var txt1, txt2, txt3;
function search_replace()
{
 /*Get text from textarea1*/
 txt1 = document.textarea_sub.string_input.value;
 /*Get text from textarea1*/
 txt2 = document.textarea_sub.string_search.value;
 var split_txt1 = txt1.split(" "); 
 var split_txt2 = txt2.split(" ");  
 var str = ""; 
 for(var i=0; i<split_txt1.length; i++){   
     var flag = 0;
     for(var j=0; j<split_txt2.length; j++){
         if (split_txt1[i] != split_txt2[j]){
            flag = 1; 
         }
         else{
             flag = 0;
             break;
         }           
     }
     if (flag == 1){         
       str = str + " " + split_txt1[i];        
     }     
 }
 document.textarea_sub.string_output.value = str;
}
               
                
                
                
             
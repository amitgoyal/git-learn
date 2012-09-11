/*jslint browser :true */
var txt1, txt2, txt3, split_txt1, split_txt2, str, flag, i, j;
function search_replace() {
    "use strict";
    /*Get text from textarea1*/
    txt1 = document.textarea_sub.string_input.value;
    /*Get text from textarea1*/
    txt2 = document.textarea_sub.string_search.value;
    split_txt1 = txt1.split(" ");
    split_txt2 = txt2.split(" ");
    str = "";
    for (i = 0; i < split_txt1.length; i = i + 1) {
        flag = 0;
        for (j = 0; j < split_txt2.length; j = j + 1) {
            if (split_txt1[i] !== split_txt2[j]) {
                flag = 1;
            } else {
                flag = 0;
                break;
            }
        }
        if (flag === 1) {
            str = str + split_txt1[i] + " ";
        }
    }
    document.textarea_sub.string_output.value = str;
}
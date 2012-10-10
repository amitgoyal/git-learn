<?php
/**
*@file
* Contains function to display wildcard from url.
*/
function demo_basic_extra($wildcard) {
$content['rawmarkup']=array(
'#type' => 'markup',
'#markup' => '<p>' . t("The wildcard is %wildcard", array('%wildcard' => $wildcard)) . '</p>');
return $content;
}
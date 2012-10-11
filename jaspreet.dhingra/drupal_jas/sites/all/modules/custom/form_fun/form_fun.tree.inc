<?php
/*
*@file
called form_fun_tree().
*/

function form_fun_tree_page() {
return drupal_get_form('form_fun_tree');
}
function form_fun_tree() {
    $form = array();
    $form['#tree'] = TRUE;
    $form['home'] = array(        
        '#type' => 'fieldset',
        '#title' => t('Home address'),
         );    
     $form['home']['street'] = array(
         '#type' => 'textfield',
         '#title' => t('Street Address'),
         );     
     $form['home']['city'] = array(
         '#type' => 'textfield',
         '#title' => t('City'),
         );
    $form['work'] = array(
        '#type' => 'fieldset',
        '#title' => t('work address'),
        );    
     $form['work']['street'] = array(
         '#type' => 'textfield',
         '#title' => t('Street Address'),
        );     
     $form['work']['city'] = array(
         '#type' => 'textfield',
         '#title' => t('City'),
        );     
    $form['submit'] = array(
         '#type' => 'submit',
         '#value' => t('Submit'),
         );
     
     function form_fun_tree_submit(&$form, &$form_state) {
         dsm($form_state);
     }
return $form;

}





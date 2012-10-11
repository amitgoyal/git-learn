<?php
/*
*@file
calls form_fun_states_page().
*/
function form_fun_states_page() {
return drupal_get_form('form_fun_states');
}

function form_fun_states() {
$form =array();
$form['name'] = array(
                   '#type' => 'textfield',
                   '#title' => t('My name'),
);

$form['status'] = array(
                   '#type' => 'checkbox',
                   '#title' => 'Partner in crime',
);    

$values = array(0 => t('Female'), 1 => t('Male'));
$form['Gender'] = array(                   
    '#type' => 'radios',
    '#title' => t('Gender'),
    '#default_value' => 'male',
    '#options' => $values,
);

/*$form['pass1'] = array(
  '#type' => 'password',
  '#title' => t('Password'),
  '#maxlength' => 64,
  '#size' => 15,
);*/
$form['pass2'] = array(
  '#type' => 'password_confirm',
  '#title' => t('Password'),
  '#size' => 25,
);

$form['choice'] = array(
'#type' => 'select',
'#title' => t('Number of partners'),
'#options' => array(
'one' => t('One'),
'two' => t('Two'),
'more' => t('More than two'),
),
'#required' => TRUE,
);  

$form['description'] = array(
    '#type' => 'text_format',
    '#title' => t('Your Description'),
); 


$form['partner'] = array(
                   '#type' => 'container',
                   '#states' => array(
                                  'visible' => array(
                                                 ':input[name = "status"]' => array('checked' => TRUE),
                                                    ),
                                     ),
);

$form['partner']['name'] = array(
                                '#type' => 'textfield',
                                '#title' => 'My partner in crime',
);

function form_fun_tree_checkbox(&$form, &$form_state) {
         dsm($form_state);
     }

return $form;
}                       


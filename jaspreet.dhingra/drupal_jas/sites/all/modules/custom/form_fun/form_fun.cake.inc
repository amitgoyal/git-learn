<?php
/*
*@file
called form_fun_cake_page().
*/
function form_fun_cake_page() {
return drupal_get_form('form_fun_cake');
}
function form_fun_cake() {
$form = array();

$form['choice'] = array(
'#type' => 'select',
'#title' => t('cake or pie'),
'#description' => t('what would you like to have?'),
'#options' => array(
'cake' => t('cake please!'),
'pie' => t('pie please!'),
),
'#default_value' => 'cake',
'#required' => TRUE,
);

$form['buttons']['submit'] = array(
'#type' => 'submit',
'#value' => t('submit'),
);
$form['buttons']['unsure'] = array(
'#type' => 'submit',
'#value' => t('Equivocate'),
'#submit' => array('form_fun_cake_unsure'),
'#validate' => array(),
      );
function form_fun_cake_validate(&$form, &$form_state) {
        // dsm($form_state);
    if ($form_state['values']['choice'] == 'cake') {
          form_set_error('choice', t('We r out of cake'));
    }
}
function form_fun_cake_submit(&$form, &$form_state) {
    //dsm($form_state['values']);
    $form_state['redirect'] = ''; //redirect to home page
    
}
function form_fun_cake_unsure(&$form, &$form_state) {
    drupal_set_message(t('Make up ur mind'), 'Warning');
    
}
    
return $form;
}

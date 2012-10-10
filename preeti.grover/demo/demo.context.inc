<?php
function demo_node_context($node) {
//if(is_numeric($nid)&& $node=node_load($nid)){
        $text = $node->body['und'][0]['value'];
        $output = array(
            '#type' => 'markup',
            '#markup' => $text,
        );
        return $output;
    //}
        //else {
         //   return drupal_not_found();
        //}
}
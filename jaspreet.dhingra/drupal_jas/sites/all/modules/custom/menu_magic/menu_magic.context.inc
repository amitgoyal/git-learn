<?php
/*
@file
* Contains menu_magic_node_context().
*/
function menu_magic_node_context($node)
{
  $output = array(
    '#type' => 'markup',
    '#markup' => 'This looks even more magically awesome'
  );
  return $output;
} 

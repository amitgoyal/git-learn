 
 <?php
  function menu_magic_extra($wildcard) {
      $content = array(
          '#type' => 'markup',
          '#markup' => '<p>' . t('the wildcard contains the value "%wildcard".', array(
              '%wildcard' => $wildcard
          )) . '</p>'
      );
      return $content;
  } 

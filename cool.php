<?php

  ini_set('display_errors', 'On');
  error_reporting(E_ALL | E_STRICT);

  $doc = new DOMDocument();
  $doc->load('http://digm.drexel.edu/acelab/category/Events/feed/');
  echo $doc->saveXML();


  $args = array('type' => 'post', 'child_of' => 0, 'orderby' => 'name', 'order' => 'ASC', 'hide_empty' => 1, 'hierarchical' => 1, 'taxonomy' => $taxonomies, 'pad_counts' => true);
  $categories = get_categories($args);

  echo 'maple';
?>

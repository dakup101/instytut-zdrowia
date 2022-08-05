<?php

add_action('init', 'specialists_ajax_init');

function specialists_ajax_init(){
  add_action( 'wp_ajax_specialistsajax', 'specialists_ajax' );
  add_action( 'wp_ajax_nopriv_specialistsajax', 'specialists_ajax' );

}

function specialists_ajax(){
  $doctor = get_field('specs', $_POST['doctor']);
  $title = $doctor['title'];
  $name = get_the_title( $_POST['doctor'] );
  $img = $doctor['img'];
  $desc = $doctor['desc'];

  $data = array(
    "doctor" => $_POST['doctor'],
    "title" => $title->name,
    "name" => $name,
    "desc" => $desc,
    "img" => $img
  );
  
  echo json_encode($data, true);

  wp_die();
}
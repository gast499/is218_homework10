<?php
  include_once('Validator.php');
  class Sanitizer{
    public $em;
    public $hp;
    public function __construct(){
    }
    
    public function sanitize($email, $url){
      $em = filter_var($email, FILTER_SANITIZE_EMAIL);
      echo $em;
      echo '<br><br>';
      $hp = filter_var($url, FILTER_SANITIZE_URL);
      echo $hp;
      echo '<br><br>';
      $this->validate($em, $hp);
    }  
    
    public function validate($email, $url){
      $val = new Validator;
      $val -> validate($email, $url);
    }
  }
  $sanitizer = new Sanitizer;
  //echo 'HIT';
  $sanitizer->sanitize($_POST['email'], $_POST['homepage']);
  //echo 'HIT';
  //echo filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
?>
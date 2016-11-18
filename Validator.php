<?php
  class Validator {
    public function validate($email, $url){
      $eval = filter_var($email, FILTER_VALIDATE_EMAIL);
      $hval = filter_var($url, FILTER_VALIDATE_URL);
      if ($eval){
        echo 'The email is valid.<br><br>';
      }
      else {
        echo 'The email is NOT valid.<br><br>';
      }
      if ($hval){
        echo 'The homepage is valid.<br><br>';
      }
      else {
        echo 'The homepage is NOT valid.<br><br>';
      }
    }
  }
?>
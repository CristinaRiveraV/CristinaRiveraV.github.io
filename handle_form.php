<?php
    $validation_error = "";
    $success_message = "";
  
    $name = $email = $message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //Getting the name
      if (empty($_POST["name"])) {
        $validation_error = "*Name is required";
      } else {
        $name = $_POST["formname"];
      }
    
      validate_email();
      validate_message();
    }

  function validate_email(){
    if (empty($_POST["femail"])) {
      $validation_error = "Email is required";
    } else {
      if(filter_var($e, FILTER_VALIDATE_EMAIL)){
        $email = test_input($_POST["femail"]);
      }else{
        $validation_error = "Please write a valid email adress";
      }
    } 
  }
  function validate_message(){
    if (empty($_POST["fmessage"])) {
      $validation_error = "*Please write a message";
    } else {
      if(strlen($message) >1000)){
        $validation_error = "*The message can't be longer than a thousand characters.";
      }else{
        $message = $_POST["fmessage"];
      }
    }

  }
?>

<?php
  #Redirects user to another location.
  function redirect($newLocation) {
    header("Location: " . $newLocation);
    exit;
  }

  #Formats error reports for users.
  function form_errors($errors=array()) {
    $output = "";
    if (!empty($errors)) {
      $output .= "<div class=\"error\">";
      $output .= "Please fix the following errors:";
      $output .= "<ul>";
      foreach ($errors as $key => $error) {
        $output .= "<li>{$error}</li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }
    return $output;
  }

  #Checks whether or not there is a value in the field.
  function presenceVal($value) {
    return isset($value) || $value === "";
  }


?>

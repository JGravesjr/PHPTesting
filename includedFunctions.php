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
    return !isset($value) || $value !== "";
  }

  #Checks whether or not the value is present in a predefined array.
  function noArray($value, $set) {
    return in_array($value, $set);
  }

  #Checks for a min, flip it for a max.
  function minVal($value, $min) {
    return strlen($value) <= $min;
  }

  #Checks for a max
  function maxVal($value, $max) {
    return strlen($value) >= $max;
  }

  #Requiring length from an input field
  function maxLengthVal($maxLengthFields) {
    global $errors;
    foreach($maxLengthFields as $field => $max) {
      $value = trim($_POST[$field]);
      if (maxVal($value, $max)){
        $errors[$field] = ucfirst($field) . " is too long.";
      }
    }
  }

  #Checks for inclusion in the set.
  function inclusionVal($value, $set) {
    return in_array($value, $set);
  }
?>

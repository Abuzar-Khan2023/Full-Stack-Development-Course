<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $skills = $_POST["skills"];

  if (isset($skills) && !empty($skills)) {
    echo "You selected: " . implode(", ", $skills);
  } else {
    echo "No skills selected";
  }
}
?>
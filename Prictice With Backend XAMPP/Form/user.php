<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['ph'] ?? '';
    $website = "https://www.google.com";
    $cgpa = $_POST['cgpa'] ?? '';

    $image = $_FILES['mypic']['image'] ?? '';
    $cv = $_FILES['cv']['mycv']['cv'] ?? '';
    
    
}
?>

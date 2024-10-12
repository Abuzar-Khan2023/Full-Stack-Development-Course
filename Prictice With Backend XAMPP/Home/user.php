<?php
    if ($_SERVER ["REQUEST_METHOD"] == "GET") {
        $name = $_GET["name"];
        $email = $_GET["email"];

        if (empty($name) || empty($email)) {
            echo "No data entered! Please fill in all required fields!";
            exit();
        }

        echo "<h2>Thank you! Data received successfully!</h2>";
        echo "Name: $name <br> Email: $email";
    }

    else {
        echo "No data received!";
    }
?>
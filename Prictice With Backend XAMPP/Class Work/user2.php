<?
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        $name = $_POST{"name"};
        $gender = $_POST{"gender"};
        $image = $_FILES{"image"};

        if (empty($name) || empty($gender) || empty($image)) {
            echo "No data entered! Please fill in all required fields!";
            exit();
        }
    }

    else {
        echo "No data received!";
    }
?>
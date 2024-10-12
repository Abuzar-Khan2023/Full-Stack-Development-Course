<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prictice</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <form method="post" action="">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit" value="Submit">
    </form>

    

    <a href="/user.php">Go to User Page!</a>

    <?php
    include "/user.php";
    ?>
    
</body>
</html>
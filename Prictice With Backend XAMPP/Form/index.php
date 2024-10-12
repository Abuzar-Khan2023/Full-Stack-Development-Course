<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 25/09/2024</title>
</head>
<body>

<form action="user.php" method="POST" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name here" required>
    <br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>
    <br>
    
    <label for="Ph">Phone Number:</label>
    <input type="text" id="Ph" name="Ph" placeholder="Enter phone number" required>
    <br>
    
    <label for="Website">Website link:</label>
    <input type="url" id="Website" name="Website" placeholder="Enter your website link">
    <br>
    
    <label for="cgpa">Enter Your CGPA:</label>
    <select name="cgpa" id="cgpa" required>
        <option value="">Select CGPA</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <br>
    
    <label for="mypic">Picture:</label>
    <input type="file" id="mypic" name="image" accept="image/*" required>
    <br>
    
    <label for="mycv">CV:</label>
    <input type="file" id="mycv" name="cv" accept=".pdf,.doc,.docx" required>
    <br>
    
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

    
</body>
</html>
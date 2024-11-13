<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
  
</head>
<body>
    
    <form method="POST" id="registrationform" onsubmit = "return validateForm()" action="submit.php">
        <h2>Student Info</h2>
        <div>
            <label for="name">Enter your name: </label>
            <input type="text" name="name" id="name"><br>
            <small id="nameError" class="error-message"></small>
        </div>
        <div>
            <label for="roll">Roll Number: </label>
            <input type="number" name="roll" id="roll"><br>
            <small class="error-message" id="rollError"></small>
        </div>
        <div>
            <label for="mobile">Mobile Number: </label>
            <input type="text" name="mobile" id="mobile"><br>
            <small class="error-message" id="mobileError"></small>
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email"><br>
            <small class="error-message" id="emailError"></small>
        </div>
        <button type="submit">Submit</button>
    </form>
    <script src="./js/validation.js"></script>
</body>

</html>
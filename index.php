<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./jquery_form_validation/css/screen.css">
    <link rel="stylesheet" href="styles.css">
  
</head>
<body>
    
    <form id="registrationform">
        <h2>Student Info</h2>
        <label for="name">Enter your name: </label>
        <input type="text" id="name">
        <small class="error-message" id="usernameError"></small>
        <label for="roll">Roll Number: </label>
        <input type="number" id="roll">
        <label for="mobile">Mobile Number: </label>
        <input type="text" id="mobile">
        <label for="email">Email: </label>
        <input type="email" id="email">
        <button type="submit">Submit</button>
    </form>
    <script src="./jquery_form_validation/lib/jquery.js"></script>
	<script src="./jquery_form_validation/dist/jquery.validate.js"></script>
    <script src="js/validation.js" defer></script>
</body>

</html>
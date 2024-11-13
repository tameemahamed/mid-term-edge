<?php

include 'db_con.php';

function checkRoll(){

}


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll = htmlspecialchars(trim($_POST['roll']));
    $name = htmlspecialchars(trim($_POST['name']));
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    $email = htmlspecialchars(trim($_POST['email']));

    $st = "insert into students (student_name, roll_number, mobile, email)
            values (?, ?, ?, ?)";
    $statement = $connection->prepare($st);
    $statement->bind_param("siis", $name, $roll, $mobile, $email);
    /*
        The "sss" represents the data types of the variables that are being bound to the SQL query. Each letter in "sss" corresponds to the data type of a parameter:
        "s": String
        "i": Integer
        "d": Double (float)
        "b": Blob (binary data)
        Since username, email, and hashedPassword are all strings, we use "sss". If one of the parameters were an integer, for example, you would use "sii" if you had one string and two integers. The bind_param() function securely binds these values to the prepared SQL statement, helping to prevent SQL injection attacks.
    */
    if($statement->execute()){
        echo 'submitted successfully';
    }


}

?>
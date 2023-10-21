<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'win');

if (!$conn) {
    echo 'fail: ' . mysqli_connect_error();
}


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    if(isset($_POST['submit'])){
        //echo $fname . ' ' . $lname . ' ' . $email;

        $sql = "INSERT INTO users(fname, lname, email) 
                VALUES ('$fname', '$lname','$email')";

        mysqli_query($conn, $sql);
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method = "POST">

        <input type="text" name="fname" id="fname" placeholder="First Name">
        <input type="text" name="lname" id="lname" placeholder="Last Name">
        <input type="text" name="email" id="email" placeholder="Email">

        <input type="submit" name="submit" value="send">

    </form>

    <script src="./js/script.js"></script>
</body>
</html>


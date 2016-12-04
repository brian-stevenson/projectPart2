<html>
<header></header>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="./js/project2.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/project2.css">
</head>
<body>
    <?php
        $connect = new mysqli("localhost","root");
        if ($connect->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "CREATE DATABASE IF NOT EXISTS p2";
        if ($connect->query($sql) === TRUE) {
        } else {
            echo "Error creating database: " . $connect->error;
        }


        $sql = "CREATE TABLE IF NOT EXISTS formproc (fname VARCHAR(15), lname VARCHAR(20), eml VARCHAR(30), msg VARCHAR(100))";

        mysqli_select_db($connect, 'p2');

        if ($connect->query($sql) === TRUE) {
        } else {
            echo "Error creating table: " . $connect->error;
        }

        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO formproc (fname,lname,eml) VALUES('$firstname','$lastname','$email')";

        if ($connect->query($sql) === TRUE) {
            echo("Form Submitted Successfully. Thanks for your message!");
        } else {
            echo "Error with insert: " . $connect->error;
        }
    ?>
</body>
<footer></footer>
</html>
<?php
    $connection = mysqli_connect("localhost", "root", "", "contact-us-form");

    if($connection){
        echo "Thank you for contacting us, we will be in touch as soon as possible.";
    }
    else {
        echo "Connection Failed";
    }

    if(isset($_POST['submit'])){
        $message = mysqli_real_escape_string($connection, $_POST['message']);
        $sql = "INSERT INTO messages (message)
                VALUES ('$message')";
        mysqli_query($connection, $sql);
    }
?>

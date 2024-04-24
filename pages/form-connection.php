<?php
    $connection = mysqli_connect("localhost", "root", "", "booking-form");
    if($connection){
        echo "Thank you for booking at the Ankh's Oasis Resort.";
    }
    else {
        echo "Connection Failed";
    }

    $name = $_POST['name'];
    $checkInDate = $_POST['check-in-date'];
    $checkOutDate = $_POST['check-out-date'];
    $numberOfGuests = $_POST['number-of-guests'];
    $contactNumber = $_POST['contact-number'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    if(isset($_POST['submit'])){
        $sql = "INSERT INTO info (name, checkInDate, checkOutDate, numberOfGuests, contactNumber, email, comment)
                Values ('$name', '$checkInDate', '$checkOutDate', '$numberOfGuests', '$contactNumber', '$email', '$comment')";
        mysqli_query($connection, $sql);
    }
?>
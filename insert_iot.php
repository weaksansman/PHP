<?php
    include 'connect.php';
    // Check if the form is submitted
    $zone = $_POST['zone'];
    $temp = $_POST['temp'];
    $hum = $_POST['hum'];
    $user = $_POST['user'];

    $sql = "INSERT INTO tbl_iot (zone, temp, hum, users) VALUES ('$zone', '$temp', '$hum', '$user')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close the connection
    $conn->close();
?>

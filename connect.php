<?php
    $link = mysqli_connect("localhost", "root", "gabrielsouza12", "challenge_read_endpoint");

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }else{
        // echo "OK";
    }
?>
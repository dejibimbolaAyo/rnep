<?php
    $con = mysqli_connect("localhost:8080","root","root","rnep");
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO subscribers(name,email) VALUES ('$name','$email')";

    mysqli_query ($con,$sql);
    
    
?>
<?php
    require "../forms/connection.php";
    if(isset($_POST["send"])){
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $age = $_POST["age"];
        $package = $_POST["package"];
        $state = $_POST["state"];
        $lga = $_POST["lga"];
        $availability = $_POST["availability"];
        $message = $_POST["message"];

       
        //Checking if user already exist
       $sql_check = "SELECT * FROM user WHERE email ='$email'";
       $query_check = mysqli_query($connection, $sql_check);

       if(mysqli_fetch_assoc($query_check)){
        //User already exist
        $error = "User already exist";
       } else{
        //Insert data to database
        $sql = "INSERT INTO user (name, phone, email, gender, age, package, state, lga, availability, message) VALUES ('$name', '$phone', '$email', '$gender', '$age', '$package', '$state', '$lga', '$availability', '$message' )";

        $query = mysqli_query($connection, $sql);


        $success = "Registration Completed";
       }
      
       
    } 

?>
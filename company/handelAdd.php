<?php  include("./database.php") ?>

<?php

    if (isset($_POST['submit'])) {
        function validate ($a){
            return trim(htmlspecialchars(htmlentities($a)));
        }
    
        //Sanitization
    
        $name = validate($_POST['name']);
        $department = validate($_POST['department']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $submit = validate($_POST['submit']);
    }

    
    $db = new Database();
    $newPassword = $db->encPassword($password);
    $sql = "INSERT INTO employees (`name`, `email` , `department` , `password`)
    VALUES ('$name' , '$email','$department','$newPassword') ";
    $success = $db->insert($sql);

    header("location:./add_emp.php");



?>
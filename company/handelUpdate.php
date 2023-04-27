<?php  include("./database.php"); $db = new Database(); session_start(); ?>
<?php
    if ($_SERVER["REQUEST_METHOD"]  == "POST") {


        
        // $cat_id = $_SESSION['cat_id'];


        $id = $_SESSION['emp_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $password = $_POST['password'];

        

        $sql = "UPDATE employees SET `name` = '$name' , `email` = '$email' , `department` = '$department' , `password` = '$password' 
        WHERE `id` = '$id' ";
        $success = $db->update($sql);
        header("location:./employees.php");
    }
?>




        





        

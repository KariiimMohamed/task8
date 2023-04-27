<?php  include("./components/header.php") ?>
<?php  include("./database.php") ?>


<?php

    if ($_SERVER["REQUEST_METHOD"]  == "POST") {
        $db = new Database();
        $row_id = $_POST['row_id'];
        $row = $db->delete('employees',$row_id);  
        $_SESSION['emp_id'] = $row_id;
        header("location:./employees.php");
    }


?>
<?php  include("./components/footer.php") ?>
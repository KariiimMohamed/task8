<?php  
include("./components/header.php");
include("./database.php");
session_start();
$db = new Database();
?>

<?php

    if ($_SERVER["REQUEST_METHOD"]  == "POST") {
        $row_id = $_POST['row_id'];
        $row = $db->find('employees',$row_id);  
        $_SESSION['emp_id'] = $row_id;
    }

?>




<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="p-3 col text-center text-white bg-primary">Edit</div>
        </div>
    </div>

    <form class="row g-3 needs-validation b-"  action="./handelUpdate.php" method="post" novalidate enctype="multipart/form-data">

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Name</label>
            <input type="text" class="form-control" id="validationCustom01" value="<?= $row['name'] ?>" name="name" required>
        </div>

        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Department</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="<?= $row['department'] ?>" name="department" required>
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Email</label>
            <input type="email" class="form-control" id="validationCustom03" name="email" value="<?= $row['email'] ?>" required>
        </div>

        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationCustom03" name="password" value="<?= $row['password'] ?>" required>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="submit">Save</button>
        </div>
    </form>
</div>

<?php include("./components/footer.php") ?>
 
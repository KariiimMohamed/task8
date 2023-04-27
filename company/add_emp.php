<?php  include("./components/header.php") ?>
<?php  include("./database.php") ?>




<div class="container">
    <form class="row g-3 needs-validation b-"  action="./handelAdd.php" method="post" novalidate enctype="multipart/form-data">

        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Name</label>
            <input type="text" class="form-control" id="validationCustom01" value="" name="name" required>

        </div>

        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Department</label>
            <div class="input-group has-validation">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="department" required>
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">email</label>
            <input type="email" class="form-control" id="validationCustom03" name="email" required>
        </div>

        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationCustom03" name="password" required>
        </div>




        <div class="col-12">
            <input class="btn btn-primary" value="Sign up" type="submit" name="submit">
        </div>

        </form>
    </div>
<?php  include("./components/footer.php") ?>
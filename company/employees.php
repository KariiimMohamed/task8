<?php  include("./components/header.php") ?>
<?php  include("./database.php") ?>

<table class="table">
            <thead> 
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Departmant</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                    $db = new Database();
                    foreach($db->read("employees") as $row):
        
                ?>     
                <tr>
                    <th scope="row"> <?= $row['id']; ?> </th>
                    <td> <?=  $row['name'] ?> </td>
                    <td> <?=  $row['department']; ?> </td>
                    <td> <?=  $row['email']; ?> </td>

                    <td>
                        <form method="post" action="./edit_emp.php">
                            <input type="hidden" name="row_id" value="<?= $row['id'] ?>">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form method="post" action="./delete_emp.php">
                            <input type="hidden" name="row_id" value="<?= $row['id'] ?>">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                   
                <?php endforeach;?> 
                </tr>
            </tbody>
</table>
<?php  include("./components/footer.php") ?>
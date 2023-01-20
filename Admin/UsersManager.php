<?php
require_once '../Part/Header.php';
require_once '../Part/Menu.php';
?>

<div class="Content">
    <div class="maindata p-5">
        <!-- <div class="addRow">
  
            <button type="button" class="btn btn-success mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#AddRow">
                Add
            </button>
            <div class="modal fade" id="AddRow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="/MYCMS/Admin/Action/AddMenu.php" method="POST">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->

        <table class="table table-striped text-center table-bordered">
            <thead>
                <tr>
                    <th>ردیف</th>
                    <th>نقش</th>
                    <th>شماره</th>
                    <th>رمز عبور</th>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>ایمیل</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = "SELECT * FROM users";
                $query = $conn->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);

                $id = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $result) {
                ?>
                        <tr>
                            <td><?php echo htmlentities($id) ?></td>
                            <td>
                                <?php echo $result->RoleID == 1?"ادمین":"کاربر"?>
                            </td>
                            <td><?php echo htmlentities($result->Phone) ?></td>
                            <td><?php echo htmlentities($result->Pass) ?></td>
                            <td><?php echo htmlentities($result->Fname) ?></td>
                            <td><?php echo htmlentities($result->Lname) ?></td>
                            <td><?php echo htmlentities($result->Email) ?></td>
                        </tr>

                <?php
                        $id++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Button trigger modal -->

<?php
require_once '../Part/Footer.php';
?>
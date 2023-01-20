<?php
require_once '../Part/Header.php';
require_once '../Part/Menu.php';
if (isset($_COOKIE["Userlogin"])) {
    if ($_SESSION["UserRoleId"] == 1) {
?>
<div class="Content">
    <div class="maindata p-5">
    <div class="addRow">
            <!-- Modal -->
            <button type="button" class="btn btn-success mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#AddRow">
                Add
            </button>
            <!-- Modal -->
            <div class="modal fade" id="AddRow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="/MYCMS/Admin/Action/AddMenu.php" method="POST">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">عنوان</label>
                                            <input type="text" name="Title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">ترتیب</label>
                                            <input type="number" name="SortOrder" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">کلاس آیکون</label>
                                            <input type="text" name="IconClass" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">لینک</label>
                                            <input type="text" name="Link" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-striped text-center table-bordered">
            <thead>
                <tr>
                    <th>ردیف</th>
                    <th>عنوان</th>
                    <th>ترتیب</th>
                    <th>ایکون</th>
                    <th>لینک</th>
                    <th>تنظیمات</th>
                </tr>
            </thead>
            <tbody>
                <?php

        $sql = "SELECT * FROM Menu ORDER BY SortOrder";
        $query = $conn->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        $id = 1;
        if ($query->rowCount() > 0) {
            foreach ($results as $result) {
                ?>
                <tr class="Menu-<?php echo htmlentities($result->Id) ?>">
                    <td>
                        <?php echo htmlentities($id) ?>
                    </td>
                    <td>
                        <?php echo htmlentities($result->Title) ?>
                    </td>
                    <td>
                        <?php echo htmlentities($result->SortOrder) ?>
                    </td>
                    <td>
                        <?php echo htmlentities($result->IconClass) ?>
                    </td>
                    <td>
                        <?php echo htmlentities($result->Link) ?>
                    </td>
                    <td>
                        <!-- Modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal<?php echo htmlentities($result->Id) ?>">
                            Edit
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo htmlentities($result->Id) ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form action="/MYCMS/Admin/Action/EditMenu.php" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <input type="hidden" name="Id"
                                                    value="<?php echo htmlentities($result->Id) ?>">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">عنوان</label>
                                                        <input type="text" name="Title"
                                                            value="<?php echo htmlentities($result->Title) ?>"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">ترتیب</label>
                                                        <input type="number" name="SortOrder"
                                                            value="<?php echo htmlentities($result->SortOrder) ?>"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">کلاس آیکون</label>
                                                        <input type="text" name="IconClass"
                                                            value="<?php echo htmlentities($result->IconClass) ?>"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">لینک</label>
                                                        <input type="text" name="Link"
                                                            value="<?php echo htmlentities($result->Link) ?>"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Edit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                        <!-- Modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#remove<?php echo htmlentities($result->Id) ?>">
                            Remove
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="remove<?php echo htmlentities($result->Id) ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-danger">آیا از حذف ردیف مطمعن هستید ؟</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button"
                                            onclick="RemoveMenu(<?php echo htmlentities($result->Id) ?>)"
                                            class="btn btn-danger">Remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
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
<?php
    } else {
        echo "<div class='Content'><h2 class='text-danger m-4'>دسترسی شما برای نمایش این صفحه محدود می باشد</h2></div>";
    }
} else {
    echo "<div class='Content'><h2 class='text-danger m-4'>جهت نمایش این صفحه لطفا وارد شوید</h2></div>";
}
?>


<!-- Button trigger modal -->

<?php
require_once '../Part/Footer.php';
?>
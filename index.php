<!-- Add Page Header -->
<?php
$site_name = "Home";
include "components/header.php";
include "db/connect.php";

if(isset($_POST['action'])){
    $uName = $_POST['name'];
    $uEmail = $_POST['email'];
    $uMobile = $_POST['mobile'];
    
    if($_POST['action'] == 'Update'){
        $id = $_POST['id'];
        include "db/update.php";
    }

    else if ($_POST['action'] = 'Add')
        include "db/add.php";
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    include "db/delete.php";
    header('Location: index.php');
}
?>

<div class="container">
    <div class="wrapper p-5 m-5">
        <!-- Add Page Title -->
        <?php
            $title_name = "All Users";
            $title_icon = "user-plus";
            $icon_href = "add_user.php";
            include "components/title.php";
        ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "db/connect.php";
                    include "db/retrive.php";
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- <i data-feather="airplay"></i> -->
<?php
include "components/footer.php"
?>
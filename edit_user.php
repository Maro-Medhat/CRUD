<!-- Add Page Header -->
<?php
$site_name = "Edit User";
include "components/header.php";
include "db/connect.php";
?>

<div class="container">
    <div class="wrapper p-5 m-5">
        <!-- Add Page Title -->
        <?php
            $title_name = "Edit User";
            $title_icon = "corner-down-left";
            $icon_href = "index.php";
            $btn_name = "Update";
            include "components/title.php";
            include "components/form.php";
        ?>
    </div>
</div>
<?php include "components/footer.php"?>
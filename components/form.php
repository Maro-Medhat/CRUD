<?php
    $uName = $uEmail = $uMobile = "";
    if(isset($_GET['id'])){
        $currentId = $_GET['id'];
        $query = "SELECT * FROM users WHERE id=$currentId";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $uName = $row['name'];
        $uEmail = $row['email'];
        $uMobile = $row['mobile'];
    }
?>
<form action="index.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" value="<?php echo $uName?>" name="name" class="form-control" id="name" placeholder="Ex. Maro" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" value="<?php echo $uEmail?>" name="email" class="form-control" id="email" placeholder="Ex. test@gmai.com" required>
    </div>

    <div class="mb-3">
        <label for="mobile" class="form-label">Mobile (Optinal)</label>
        <input type="number" value="<?php echo $uMobile?>" name="mobile" class="form-control" id="mobile" placeholder="Ex. 123456789">
    </div>

    <?php
        if(isset($_GET['id'])){
    ?>
    <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
    <?php
    }
    ?>

    <input type="submit" class="btn btn-primary" value="<?php echo $btn_name?>" name="action">
</form>
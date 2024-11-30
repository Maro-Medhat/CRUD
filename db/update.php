<?php
    $query = "UPDATE users SET name='$uName', email='$uEmail', mobile=$uMobile WHERE id=$id";
    $result = mysqli_query($conn, $query);
?>
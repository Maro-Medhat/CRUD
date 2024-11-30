<?php
    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);
?>
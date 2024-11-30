<?php
    if(isset($_POST['action']) && $_POST['action'] == 'Add'){
        $uName = $_POST['name'];
        $uEmail = $_POST['email'];
        $uMobile = $_POST['mobile'];

        $query = "INSERT INTO users(name, email, mobile) VALUES('$uName', '$uEmail', '$uMobile')";
        mysqli_query($conn, $query);
    }
?>
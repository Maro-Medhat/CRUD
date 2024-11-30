<?php
    $query = "SELECT * FROM users";
    $reuslt = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($reuslt)){
    ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['mobile']?></td>
            <td>
                <div class="d-flex justify-content-evenly">
                    <a href="index.php?id=<?php echo $row['id']?>"><i class="text-danger" data-feather="trash-2"></i></a>
                    <a href="edit_user.php?id=<?php echo $row['id'];?>"><i class="text-success" data-feather="edit"></i></a>            
                </div>
            </td>
        </tr>
        <?php
    }
?>
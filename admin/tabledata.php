<?php
include 'DB.php';
$query = "SELECT * FROM contact";
$result = $con->query($query);

if($result->num_rows > 0){
    ?>
    <table class="table  table-striped table-hover">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Product</th>
                <th>Brand</th>
                <th>Description</th>
                <th>Youtube</th>
                <th>Website</th>
                <th>Visibility</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['product'];?></td>
                <td><?php echo $row['brand'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><?php echo $row['youtube'];?></td>
                <td><?php echo $row['website'];?></td>
                <td>
                <?php if($row['visibility']==1){
                    echo "<button class=\"btn btn-success\" onclick=\"changeVisibility(" . $row['id'] .", ".$row['visibility']." )\" >";
                    echo "Visible";
                }else{
                    echo "<button class=\"btn btn-danger\" onclick=\"changeVisibility(" . $row['id'] .", ".$row['visibility']." )\" >";
                    echo "Not Visible";
                }
                    ?></button>
                <br>
                <form action="update_card.php" method="post">
                    <textarea name="values" style="display: none"><?php echo addslashes(json_encode($row));?></textarea>
                    <input type="submit" value="Edit" name="edit" class="btn btn-warning">
                </form></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
<?php
}
else{
    echo "NO DATA";
}
$con->close();
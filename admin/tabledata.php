<?php
include 'DB.php';
$query = "SELECT * FROM contact";
$result = $con->query($query);

if($result->num_rows > 0){
    ?>
    <table class="table table-dark table-striped table-hover">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Product</th>
                <th >Image</th>
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
                <td><img class="img-fluid" src="../uploaded_images/<?php echo $row['image'];?>" alt="Image Not Found" onerror="this.src='../uploaded_images/default.jpg'"></td>
                <td><?php echo $row['brand'];?></td>
                <td><?php echo $row['description'];?></td>
                <td><a href="<?php echo $row['youtube'];?>" target="_blank" class="btn btn-danger">Youtube</a></td>
                <td><a href="<?php echo $row['website'];?>" target="_blank" class="btn btn-info">Website</a></td>
                <td>
                <?php if($row['visibility']==1){
                    echo "<button class=\"btn btn-success\" onclick=\"changeVisibility(" . $row['id'] .", ".$row['visibility']." )\" >";
                    echo "Visible";
                }else{
                    echo "<button class=\"btn btn-danger\" onclick=\"changeVisibility(" . $row['id'] .", ".$row['visibility']." )\" >";
                    echo "Not Visible";
                }
                    ?></button>
                <br><br>
                <form action="update_card.php" method="post">
                    <textarea name="values" style="display: none"><?php echo addslashes(json_encode($row));?></textarea>
                    <input type="submit" value="Edit" name="edit" class="btn btn-warning">
                </form>
                <br>
                <form action="delete_card.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    <input type="hidden" name="image" value="<?php echo $row['image'];?>">
                    <input type="submit" value="Delete" name="delete" class="btn btn-light">
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
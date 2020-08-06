<?php
session_start();
if(isset($_POST['edit'])){
    $values = json_decode(stripslashes($_POST['values']), true);
    include(dirname(__FILE__) . '/../DB.php');

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Row <?php echo $values['id'];?></title>
    </head>

    <body>

    <div class="container">
        <h1>
            The Datas written for the product '<?php echo $values['product'];?>'
        </h1>
        <div class="card">
            <form action="update_card_details.php" class="form" method = "post" enctype = "multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $values['id'];?>">
                <div class="row mb-4">
                    <div class="form-group col-12">
                        <input type="text" class="form-control" placeholder="Name" name = "name" value="<?php echo $values['name'];?>" required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="form-group col-12">
                        <input type="text" class="form-control" placeholder="Phone number" name = "phone" value="<?php echo $values['phone'];?>"required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="form-group col-8">
                        <input type="file" class="form-control" name = "image">
                        <input type="hidden" name="earlier_image" value="<?php echo $values['image']?>">
                    </div>
                    <div class="card float-right col-4">
                        <img src="../../uploaded_images/<?php echo $values['image']?>" alt="Image" class="img-fluid">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="form-group col-12">
                        <input type="text" class="form-control" placeholder="Product name" name = "product" value="<?php echo $values['product'];?>" required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="form-group col-12">
                        <input type="text" class="form-control" placeholder="Brand" name = "brand" value="<?php echo $values['brand'];?>" required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="form-group col-12">
                        <textarea cols="30" rows="10" class="form-control" placeholder="Description" name = "description" required><?php echo $values['description'];?></textarea>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="form-group col-12">
                        <input type="url" class="form-control" placeholder="Youtube link" name = "youtube" value="<?php echo $values['youtube'];?>" required>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="form-group col-12">
                        <input type="url" class="form-control" placeholder="Website address" name = "website" value="<?php echo $values['website'];?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Update Data" name="update">
                    </div>
                </div>

            </form>
        </div>
    </div>
    </body>
    </html>
<?php
}
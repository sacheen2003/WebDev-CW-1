<?php
session_start();
include ('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Artists</title>
</head>
<body>
    <?php include('navbar.php'); ?>

    <div class="container">
        <div class="row" >

        <?php
            $album = "select * from album";
            $result = $conn->query($album);
            
            while ($data = $result->fetch_assoc()){ ?>
                <div class="col-md-3">
                <p><img src="albumimg/<?php echo $data['image'];?>" class="img-thumbnail" /></p>
                <h2 style="font-size: 25px;"><?php echo $data['album_name']; ?></h2>
                <p><?php echo $data['price']; ?></p>
                <p><?php echo $data['description']; ?></p>

                <?php if (isset($_SESSION['ticket'])){ ?>
                <a href="update.php?id=<?php echo $data['id']; ?>">Update</a>
                <a href="action.php?album_del_id=<?php echo $data['id'] ?>">Delete</a>
            <?php } ?>
            </div>
            <?php } 
                   
        ?>
        </div>
    </div>



</body>
</html>
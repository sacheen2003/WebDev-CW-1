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
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="dasboard.css" rel="stylesheet" type="text/css"/>
    <link href="dashboard.css" rel="stylesheet" type="text/css"/>
    <title>Buy Album</title>
</head>
<body>
<div class="mainbg">
    <?php include('navbar.php'); ?>

    <div class="container">
        <div class="row" style="margin-top:30px;">

        <?php
            $album = "select * from album";
            $result = $conn->query($album);
            
            while ($data = $result->fetch_assoc()){ ?>
                    <div class="col-md-3" style="padding-bottom:30px;">
                        <div class="card box " style="box-shadow:0 0 10px rgb(0 0 0 / 50%); background-color:#202020; color:white;" >
                        <p><img src="albumimg/<?php echo $data['image'];?>" class="img-thumbnail disalb " /></p>
                        <h2 style="font-size: 20px; text-align:center;"><?php echo $data['album_name']; ?></h2>
                        <p style="text-align:center;"><?php echo $data['price']; ?></p>
                        <p style="text-align:center;"><?php echo $data['description']; ?></p>
                               
                        </br>

                        <Button  class="button button-alb" type="Button" style="background-color:#5F84A2; ">Buy Now</Button>
                        </br> 

                        <?php if (isset($_SESSION['ticket'])){ ?>
                        <a style="margin-left:126px;" href="update.php?id=<?php echo $data['id']; ?>">Update</a>
                        <a style="margin-left:129px;" href="action.php?album_del_id=<?php echo $data['id'] ?>">Delete</a>
                        <?php } ?>
                        </div>
                    </div>
            <?php } 
                   
                ?>
        </div>
    </div>
    
    <?php include('footer.php'); ?>

</div>
</body>
</html>
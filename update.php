<?php 
include('database.php');

?>
<!DOCTYPE HTML>
<html>
    <head>
      <title>Buy Albums</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <link href="style.css" rel="stylesheet" type="text/css"/>
      <link href="dasboard.css" rel="stylesheet" type="text/css"/>
      <link href="dashboard.css" rel="stylesheet" type="text/css"/>
      <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>
    <body>

    <?php include('navbar.php'); ?>

    <?php
    $id = $_GET['id'];
    $query = "select * from album where id='$id'";
    $result = $conn->query($query);
    $data = $result->fetch_assoc();
    ?>

    <form action="action.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Album Cover Art</label>
    <input type="file" class="form-control" id="exampleFormControlInput1" name="album_cover_art" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Album Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Album" name="album_name" value="<?php echo $data['album_name']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Price</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Price" name="price" value="<?php echo $data['price']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Description</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Description" name="description" value="<?php echo $data['description']; ?>">
  </div>
  <input type="text" name="id" value="<?php echo $data['id']; ?>" hidden/>
  <button type="submit" style="background-color:white;" name="update">Update</button>
</form>
    </body>

</html>
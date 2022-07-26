<!DOCTYPE HTML>
<html>
    <head>
      <title>Artists</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>
    <body>
      <form action="action.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlInput1">Artist Image</label>
          <input type="file" class="form-control" id="exampleFormControlInput1" name="artistimage">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Artist Name</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="artist name" name="artistname">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Role</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="role" name="role">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Instagram</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Instagram" name="instagram">
        </div>
        <button type="submit" style="background-color:white;" name="add_artist" >Add</button>
      </form>
    </body>
</html>
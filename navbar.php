<!DOCTYPE html>
<html>
  <head>
    <title>My Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="navbar.css" rel="stylesheet" type="text/css"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
  </head>
  <body data-spy="scroll" data-target="navbar" >
    <div style="background: hsla(0, 0%, 100%, 0.4); backdrop-filter: blur(5px); background-color:#959794;">
      <nav class="navbar navbar-expand-lg navbar-light" style="padding-left:477px;  ">
        <a class="navbar-brand " href="dashboard.php" style="width:50px; height:18px; margin-left:35px; margin-top: 9px;background-image: url('images/logo.png'); background-size: 50px; background-repeat:no-repeat;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link listing listing-wrd" style="color:black;" href="shows.php">Shows & Tickets</a>
            </li>
            <li class="nav-item">
              <a class="nav-link listing listing-wrd" style="color:black;" href="displayalbum.php">Buy the Albums</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link listing listing-wrd" style="color:black; display:block;" href="#help" id="help">Help</a>
            </li>
            <?php if(isset($_SESSION ['ticket'])) { ?> <li class="nav-item">
              <a class="nav-link listing listing-wrd" style="color:black;" href="logout.php">Log Out</a>
            </li> <?php }
            else{ ?> <li class="nav-item">
              <a class="nav-link listing listing-wrd" style="color:black;" href="login.php">Log In</a>
            </li> <?php } ?> <div class="container">
              <div class="row"></div>
            </div>
          </ul>
        </div>
      </nav>
    </div>
  </body>
</html>
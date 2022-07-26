<?php
session_start();
include('database.php');
?>
<!DOCTYPE HTML>
<html>

  <head>
    <title>

    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="dasboard.css" rel="stylesheet" type="text/css"/>
    <link href="dashboard.css" rel="stylesheet" type="text/css"/>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  </head>

  <body>
    <div class="mainbg"> 
      <?php include('navbar.php'); ?> 
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" style="width:2000px; margin-right:19px;">
              <img style="height:800px; object-fit:cover;" src="images/h1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img style="height:800px; object-fit:fixed;" src="images/firstdiv.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img style="height:800px; object-fit:fixed;" src="images/c8.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
      <div style="margin-top:15px; background-color:#959794; border-radius:5px; margin-right:19px; margin-left:19px">
        <h style="font-size:30px; padding-left:46%; padding-top:20px;">
          <b>TOP HITS</b>
        </h>
      </div>
      <div class="container">
        <div class="row" style="padding-top:15px;">
          <div class="col-md-3">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/1j8uMpbj0MgEyDtSk9Fwjd?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
          </div>
          <div class="col-md-3">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2nDAf3plZCm18W8i20hpQ8?utm_source=generator&theme=0" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
          </div>
          <div class="col-md-3">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5F3vGwldN4pLHUNyBR2JjU?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
          </div>
          <div class="col-md-3">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/5Kdh3c9IicNHC5T5zbuBwa?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
          </div>
        </div>
      </div>
      <div style="margin-top:15px; background-color:#959794; border-radius:5px; margin-right:19px; margin-left:19px">
        <h style="font-size:30px; padding-left:43%; padding-top:20px;">
          <b>BAND MEMBERS</b>
        </h>
      </div>
      <div class="second">
        <div class="container">
          <div class="row" style="padding-bottom:15px; "> 
          <?php  
            $query = "select * from artists";
            $result = $conn->query($query);
            while($artistdata=$result->fetch_assoc())
            { ?> <div class="col-md-3 card" style="margin-top:15px; width:275px; margin-right:55px; background-color:#202020; color:white;">
              <a style="border-radius:4rem;" href="https://instagram.com/<?php echo $artistdata['insta']?>" target="_blank">
                <img src="artistimage/<?php echo $artistdata['image'] ?>" class="artist" />
              </a>
            <p class='artist-details' style="padding-left:77px;"> <?php echo $artistdata['name'] ?> </p>
            <p class='artist-details' style="padding-left:77px;"> <?php echo $artistdata['role'] ?> </p>
          </div> <?php } ?> </div>
        </div>
      </div> <?php include('footer.php'); ?>
    </div>
  </body>
</html> 
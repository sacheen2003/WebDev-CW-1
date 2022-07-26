<?php
session_start();
include ('database.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="dashboard.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    </head>
    <body>
    <div class="mainbg">
        <?php include('navbar.php'); ?>

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100" style="background-color:#abae93; color:black;">
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>

                            <img  class="card-img-top" src="images/t3.jpg" alt="..." />

                            <div class="card-body p-4">
                                <div class="text-center">

                                    <h5 class="fw-bolder">Albatross US Tour</h5>

                                    $40.00 - $80.00
                                </div>
                            </div>

                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Buy Tickets</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100" style="background-color:#caccc9; color:black;">
  
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        
                            <img class="card-img-top" src="images/t4.jpg" alt="..." />
                           
                            <div class="card-body p-4">
                                <div class="text-center">
                                    
                                    <h5 class="fw-bolder">Atti Bhayo Aus Tour</h5>
 
                                    <span class="text-muted text-decoration-line-through">$20.00</span>
                                    $18.00
                                </div>
                            </div>
                 
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Buy Tickets</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100" style="background-color:#ee8c24; color:black;">
              
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem;">Sale</div>
         
                            <img class="card-img-top" style="height:377px;" src="images/t5.jpg" alt="..." />
   
                            <div class="card-body p-4">
                                <div class="text-center">
             
                                    <h5 class="fw-bolder">Dharan Show</h5>
           
                                    <span class="text-muted text-decoration-line-through">NRs.2000</span>
                                    Nrs.1500
                                </div>
                            </div>
     
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Buy Tickets</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100" style="background-color:#fdf4dd; color:black;">
             
                            <img class="card-img-top" style ="height:377px;" src="images/t6.jpg" alt="..." />
           
                            <div class="card-body p-4">
                                <div class="text-center">
       
                                    <h5 class="fw-bolder">The Last Show 2022</h5>
                                   
            
                                    NRs.2500
                                </div>
                            </div>
           
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Buy Tickets</a></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <?php include('footer.php'); ?>
    </div>
    </body>
</html>
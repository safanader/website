<!DOCTYPE html>
<html lang="en">
<head>
               <meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
               <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
               <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
               <style>
                              @media (max-width:1000px) {
                                #DiskTop{display: none;}
                                
                              }
                              @media (min-width:1001px) {
                                #Mobile{display: none;}
                                
                              }
               </style>

</head>
<body>
               <div id="DiskTop">

                           <form>   <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: rgba(255, 255, 255, 0.459);padding-top: 11px;padding-bottom: 11px;">
                                             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                               <span class="navbar-toggler-icon"></span>
                                             </button>
                                             <a class="navbar-brand" href="#"><img src="logoBuity.png" alt="" style="width: 55%;margin-left: 26px;"></a>
                                           
                                             <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="margin-left: -128px;">
                                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style=" color: #603A44 !important;">
                                                 <li class="nav-item active">
                                                   <a class="nav-link" href="http://localhost/website/home.php" style=" color: #603A44 !important;font-size: 26px;">Home </a>
                                                 </li>
                                                 <li class="nav-item">
                                                   <a class="nav-link" href="http://localhost/website/product/product.php" style=" color: #603A44 !important;font-size: 26px">Products</a>
                                                 </li>
                                                 <li class="nav-item">
                                                   <a class="nav-link" href="http://localhost/website/AboutUS/AboutUS.php" style=" color: #603A44 !important;font-size: 26px">About US</a>
                                                 </li>
                                                 <li class="nav-item">
                                                           <div style="    margin-top: 6px;margin-left: 10px;margin-right: 26px;color: #603a44 !important;font-size: 26px">Ar</div>
                                                 </li>
                                                 <li class="nav-item">
                                                            <img src="SearchIc.png" style="    width: 20px; " alt="" id="searchimg" imgval ="1"> <input type="text" name="" id="srchImg" style="margin-top: 11px;display: none;">
                                                 </li>
                                               </ul>
                                               <?php
session_start();
if (isset($_SESSION['user'])){
 if ($_SESSION['user']->ROLE === "USER"){
    echo "Welcome". $_SESSION['user']->firstname;
    echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name ="logout" style="border-color: #CC5C7D;color: #CC5C7D;font-size: 20px;">Logout</button>
    ';
 }else{
   header("location:http://localhost/website/login/login.php",true);
   die("");
 }
}else{
  header("location:http://localhost/website/login/login.php",true);
  die("");
}
?>
             
                                               
                                            
                                             </div>
                                           </nav>   </form>
               </div>   
               
               <div id="Mobile">

                        <form>      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="text-align: center;">
                                             <a class="navbar-brand" href="#"><img src="logoBuity.png" alt="" style="width: 108px;"></a>
                                             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                               <span class="navbar-toggler-icon"></span>
                                             </button>
                                             <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                               <ul class="navbar-nav">
                                                 <li class="nav-item active">
                                                   <a class="nav-link" href="http://localhost/website/home.php">Home <span class="sr-only">(current)</span></a>
                                                 </li>
                                                 <li class="nav-item">
                                                   <a class="nav-link" href="http://localhost/website/product/product.php">Products</a>
                                                 </li>
                                                 <li class="nav-item">
                                                   <a class="nav-link" href="http://localhost/website/AboutUS/AboutUS.php">About US</a>
                                                 </li>
                                                 <li class="nav-item">
                                                   <a class="nav-link" href="#">Ar</a>
                                                 </li>
                                              
                                               </ul>
                                               <div>
                                                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="logout" style="border-color: #CC5C7D ;color: #CC5C7D;font-size: 11px;">Logout</button>
  
                                               </div>
                                             </div>
                                           </nav></form>
               </div>
</body>
</html>
<?php
   if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    header("location:http://localhost/website/login/login.php",true);
  }


?>
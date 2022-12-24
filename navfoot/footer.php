<?php
ob_start();
include 'language.php';
$en_select='';
$ar_select = '';
$_SESSION['language']= 'en';
$language = $_SESSION['language'];

if((isset($_GET['language']) && $_GET['language'] == 'en') || !isset($_GET['language'])){
    $en_select='selected';
     $language ='en';

 }else{
   echo '<link href="bootstrap-rtl.css">';
   $ar_select='selected';
         $language='ar';
       
 }
 $con=new mysqli('localhost','root','','project');
 $sql= "SELECT page_content FROM page WHERE language_type='$language'";
 $con->set_charset('utf8');
 $result=$con->query($sql);
 $row = $result->fetch_all(MYSQLI_ASSOC);           

?>
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

                <footer style="background-color:#E3D8DC ;padding-top: 30px;padding-bottom: 30px;">
                  <nav class="navbar navbar-expand-lg navbar-light " >
                                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                   <span class="navbar-toggler-icon"></span>
                                 </button>
                                 <a class="navbar-brand" href="#"><img src="logoBuity.png" alt="" style="width: 55%;margin-left: 26px;"></a>
                               
                                 <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="margin-left: -107px;">
                                   <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style=" color: #603A44 !important;">
                                    
                                     <li class="nav-item">
                                       <a class="nav-link" href="http://localhost/website/contactus/contactus.php" style=" color: #603A44 !important;font-size: 26px"><?php echo $row['5']['page_content'] ?></a>
                                    
                                   </ul>
                                 <div style="text-align: left;padding-left: 172px; width: 60%;">
                                    <a href="https://www.facebook.com/"><img src="facebook.png" alt="" style="width: 13px;margin-right: 11px;"></a> <a href="https://www.whatsapp.com/"><img src="whatsapp.png" alt="" style="width: 26px;margin-right: 11px;"></a> <a href="https://mail.google.com/"><img src="email.png" alt=""style="width: 30px;"></a>
                                 </div>
                                     <button  style="margin-left: 11px;color: white; border-radius: 34px; border: none ;background-color:#CC5C7D ;padding: 5px; width: 128px; margin-right: 30px; font-size: 21px;" ><?php echo $row['6']['page_content'] ?> <img src="arrowRightSmall.png" alt="" style="width: 13px;"></button>
                                
                                 </div>
                               </nav>  
   </footer>
               </div>   
               
               <div id="Mobile">
                <div class="container-fluid" style="background-color: #cc5c7e17;padding-top: 30px;padding-bottom: 30px;margin-top: 30px;">
                  <div style="width: 100%;text-align: -webkit-center;"> <img src="logoBuity.png" style="width: 165px;" alt=""></div>
                  <div style="width: 100%;text-align: -webkit-center;margin-top: 23px;"> <a href="http://localhost/website/contactus/contactus.php" style="color:#603A44 ;text-decoration: none;margin-top: 30px;font-size: 30px;font-weight: bold;"><?php echo $row['5']['page_content'] ?></a></div>
                  <div style="width: 100%;text-align: -webkit-center;margin-top: 23px;">     <a href="https://www.facebook.com/"><img src="facebook.png" alt="" style="width: 13px;margin-right: 11px;"></a> <a href="https://www.whatsapp.com/"><img src="whatsapp.png" alt="" style="width: 26px;margin-right: 11px;"></a> <a href="https://mail.google.com/"><img src="email.png" alt=""style="width: 30px;"></a> </div>
                  <div style="width: 100%;text-align: -webkit-center;margin-top: 23px;"> <button  style="margin-left: 11px;color: white; border-radius: 34px; border: none ;background-color:#CC5C7D ;padding: 5px; width: 128px;  font-size: 21px;" ><?php echo $row['6']['page_content'] ?> <img src="arrowRightSmall.png" alt="" style="width: 13px;"></button>   </div>
               </div>
               </div>
</body>
</html>
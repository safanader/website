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
               <style>
                              .btn-outline-success:not(:disabled):not(.disabled).active, .btn-outline-success:not(:disabled):not(.disabled):active, .show>.btn-outline-success.dropdown-toggle {
                                             background-color: #CC5C7D;
                                             color: white;
                              }
                              .btn-outline-success:hover{
                                             background-color: #CC5C7D !important;
                                             color: white !important;
                              }
                              .btn-outline-success.focus, .btn-outline-success:focus{
                                             box-shadow:   0 0 0 0.2rem #cc5c7e8e !important;
                              }
                              .carslRow{
                                             padding-left: 75px;
                                             padding-right: 75px;
                                             text-align: -webkit-center;
                              }
                              .carslImgStyle{
                                             width:100%;
                                             border-radius: 28px;

                              }
                              @media (max-width:1000px) {
                                #DiskTop{display: none;}
                                
                              }
                              @media (min-width:1001px) {
                                #Mobile{display: none;}
                                
                              }
                          
               </style>
</head>
<body style="background-color: #F5EBEF;">

  <div id="DiskTop">

 <?php
              include "../navfoot/nav.php";
?>

    <div class="container-fluid" style="background-image: url('Group\ 174.png');background-position: center;background-size: cover;background-repeat: no-repeat;    padding-top: 472px;padding-bottom: 343px;">
    
                   <div class="container" style="text-align: -webkit-center">
                     
                       <p style="text-align: left; font-size: 21px;font-weight: 500;width: 54%;margin-left: -44%;"><span style="font-size: 35px;color: #CC5C7D;">Creativity Shop</span><?php echo $row['4']['page_content'] ?></p>
                   </div>
                   
    </div> 
    <?php
             include "../navfoot/footer.php";
?>  
   </div>   

   <div id="Mobile">
   <?php
               include "../navfoot/nav.php";
?>
     <div class="container-fluid" style="background-image: url('backgroundHome.png');background-position: center;background-size: cover;background-repeat: no-repeat;    padding-top: 472px;padding-bottom: 343px;">
   
                    <div class="container" style="text-align: -webkit-center">
                      
                        <p style="text-align: center; font-size: 21px;font-weight: 500;"><span style="font-size: 35px;color: #CC5C7D;">Creativity Shop</span><?php echo $row['4']['page_content'] ?></p>
                    </div>
                    
     </div>  
     <?php
              include "../navfoot/footer.php";
?>  
    </div>    
</body>
</html>
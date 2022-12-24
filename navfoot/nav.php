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
               <link href="bootstrap-rtl.css">
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

               <form method="POST" >    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color: rgba(255, 255, 255, 0.459);padding-top: 11px;padding-bottom: 11px;">
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                               <span class="navbar-toggler-icon"></span>
                                             </button>
                                             <a class="navbar-brand" href="#"><img src="logoBuity.png" alt="" style="width: 55%;margin-left: 26px;"></a>
                                           
                                             <div class="collapse navbar-collapse" id="navbarTogglerDemo03" style="margin-left: -128px;">
                                               <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style=" color: #603A44 !important;">
                                                 <li class="nav-item active">
                                                   <a class="nav-link" href="http://localhost/website/home.php" style=" color: #603A44 !important;font-size: 26px;"><?php echo $row['7']['page_content'] ?> </a>
                                                 </li>
                                                 <li class="nav-item">
                                                   <a class="nav-link" href="http://localhost/website/product/product.php" style=" color: #603A44 !important;font-size: 26px"><?php echo $row['8']['page_content'] ?></a>
                                                 </li>
                                                 <li class="nav-item">
                                                   <a class="nav-link" href="http://localhost/website/AboutUS/AboutUS.php" style=" color: #603A44 !important;font-size: 26px"><?php echo $row['9']['page_content'] ?></a>
                                                 </li>
                                                 <li class="nav-item">
              <select onchange="set_language()" name="language" id="language" style="margin-top: 6px;margin-left: 10px;margin-right: 26px;color: #603a44 !important;font-size: 26px">
                
                   <option value="en" <?php echo $en_select?>>En</option>
                   <option value="ar"  <?php '<link href="bootstrap-rtl.css">'; echo $ar_select?>> Ar</option>
                         
              </select>  
                                </li>
                                                 <li class="nav-item">
                                                            <img src="SearchIc.png" name = "search" style=" width: 20px; " alt="" id="searchimg" imgval ="1"> <input type="text" name="inputsearch" id="srchImg" style="margin-top: 11px;display: none;">
                                                 </li>
                                                
                                               </ul>
                                             
                                               <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="register" style=" border-color: #CC5C7D;color: #CC5C7D;font-size: 20px;"><?php echo $row['10']['page_content'] ?></button>
                                                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="login" style="margin-left: 11px; border-color: #CC5C7D ;color: #CC5C7D;font-size: 20px;" ><?php echo $row['11']['page_content'] ?></button>
                                            
                                             </div>
                                           </nav>   </form>
               </div>   
               
               <div id="Mobile">

               <form method="POST" >    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="text-align: center;">
                                             <a class="navbar-brand" href="#"><img src="logoBuity.png" alt="" style="width: 108px;"></a>
                                             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                               <span class="navbar-toggler-icon"></span>
                                             </button>
                                             <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                               <ul class="navbar-nav">
                                                 <li class="nav-item active">
                                                   <a class="nav-link" href="http://localhost/website/home.php"><?php echo $row['7']['page_content'] ?> <span class="sr-only">(current)</span></a>
                                                 </li>
                         <li class="nav-item">
                         <a class="nav-link" href="http://localhost/website/product/product.php"><?php echo $row['8']['page_content'] ?></a>
                                                 </li>
                                                 <li class="nav-item">
                          <a class="nav-link" href="http://localhost/website/AboutUS/AboutUS.php"><?php echo $row['9']['page_content'] ?></a>
                                                 </li>
                                                 <li class="nav-item">
              <select onchange="set_language()" name="language" id="language" style="margin-top: 6px;margin-left: 10px;margin-right: 26px;color: #603a44 !important;font-size: 26px">
                
                   <option value="en" <?php echo $en_select?>>En</option>
                   <option value="ar"  <?php echo'<link href="bootstrap-rtl.css">'; echo $ar_select?>selected>Ar</option>
                         
              </select>  
                                </li>
                                              
                                               </ul>
                                               <div>
                                                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name= "register" style="border-color: #CC5C7D ;color: #CC5C7D;font-size: 11px;"><?php echo $row['10']['page_content'] ?></button>
                                                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="login" style="margin-left: 11px; border-color: #CC5C7D ;color: #CC5C7D;font-size: 11px;" ><?php echo $row['11']['page_content'] ?></button>
                                               </div>
                                             </div>
                                           </nav>

               </div>
               <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
               <script>
    function set_language(){
        var language =jQuery('#language').val();
        window.location.href='http://localhost/website/home.php/?language='+language;
    }

    
</script>
<?php
ob_start();
if(isset($_POST['search'])){
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost;dbname=project;",$username,$password);
if(isset($_GET['inputsearch'])){
    $Search= $database->prepare("SELECT * FROM  page WHERE page_content LIKE : value OR picture LIKE : value");
    $Search_values ="%". $_GET['search']."%";
    $Search->bindParam ("value",$Search_values);
    $Search->execute();
   foreach ($Search AS $data){
        echo '<h1>'.$data['page_content'].'</h1>';
       
    }}
}ob_end_flush();
?>

<?php

if (isset($_POST['register'])){
    header("location:register/register.php") ; ob_end_flush();
}

if(isset($_POST['login'])){
    header("location:login/login.php");ob_end_flush();
}

if(isset($_POST['product']))

session_start();
if(isset($_SESSION['user'])){
    if($_SESSION['user']->ROLE ==="USER"){

'<a  href="user/product.php">'. 'product'.'</a>';

    }else{
        header("location:http://localhost/website/login/login.php",true);
    }
}
ob_end_flush()
?>



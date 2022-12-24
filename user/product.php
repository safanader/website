<?php
ob_start();
//include '../navfoot/nav.php';

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
                              @media (max-width:365px) {#dropBut{width: 271px !important;}
                                        #dropButMen{width: 271px !important;}     
                              }
                              .custom-select{
                                background-image: url('arrowDown.png');
                                background-repeat: no-repeat;
                                background-size: auto;

                              }
               </style>
</head>
<body style="background-color: #F5EBEF;">
         <div class="container-fluid" style="padding-top: 349px;padding-bottom: 303px;background-image: url('backgroundHome.png');background-position: center;background-size: cover;background-repeat: no-repeat;">
                        <div class="container" style="text-align: -webkit-center">
                          
                             
                                           <form  method="GET">
                                            <!-- <select name="cars" class="custom-select mb-3" style="width: 309px;border-radius: 29px;background-color: #CC5C7D;color: white;text-align: center;font-size: 21px;">
                                              <option selected>Custom Select Menu</option>
                                              <option value="type1"> Women </option>
                                              <option value="type2">type2</option>
                                              <option value="type3">type3</option>
                                            </select> -->
                                            
                                            <?php
 $con=new mysqli('localhost','root','','project');
 $sql= "SELECT * FROM categories";
$result = mysqli_query($con,$sql) or die("Bad Query: $sql");

?>

<select onchange="set_category()" name="category" id="category" class="custom-select mb-3" style="width: 309px;border-radius: 29px;background-color: #CC5C7D;color: white;text-align: center;font-size: 21px;">
<?php
while ($row1 = mysqli_fetch_array($result)):;?>
<option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
<?php endwhile;?>
<?php
if (isset($_GET['category'])){
    $categoryName = $_GET['category'];
    $sql= "SELECT * FROM categories WHERE id= $categoryName";
  if($result = mysqli_query($con,$sql)){
      if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_array($result)){
              $dbselected =$row['category'];
          }
          mysqli_free_result($result);
      }else{
          echo "Something went wrong ...";
      }
  }else{
      echo "ERROR: Could not execute $sql." . mysqli_error($con);
  }



}
?>
</select>
    <br>
  <button  type="submit" name ="go" style="color: white; border-radius: 34px; border: none ;background-color:#CC5C7D ;padding: 8px; width: 135px;  font-size: 21px;margin-bottom: 60px;" >Go <img src="arrowRightSmall.png" alt="" style="width: 13px;"></button><br>
                              </form>
                              <?php
                              $username = "root";
                              $password = "";
                              $database = new PDO("mysql:host=localhost;dbname=project;",$username,$password);
                              $sql= "SELECT * FROM categories WHERE id = :id";
                              if (isset($_GET['category'])){
                                $categoryName = $_GET['category'];{
                              if (isset($_GET['go'])){
                               echo $categoryName;
                                if( $categoryName =="10")
                                {
                                  header("location:../Women/women.php");
                                }
                                else if ($categoryName == "9"){
                                header("location:../type1.php");
                                }
                                else if ($categoryName == "12"){
                                  header("location:../type2.php");
                                  }
                                  else if ($categoryName =="11"){
                                    header("location:../Custom Menu.php");
                                    }
                              }
                            }}
                              ?>
                        </div>
         </div>      
         <?php
   include '../navfoot/footer.php';
    ?>
</body>
</html>
<?php if(isset($_POST['go'])){
  
 header("location:$categoryName.php");
}
ob_end_flush();
?>
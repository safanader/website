<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        @media (max-width:1000px) {

           #FormConnectUs{
               width: 100%;
           }
        }
  @media (min-width:1001px) {
           #FormConnectUs{
               width: 70%;
      }
      
  }
       </style>
</head>
<body  style="  background-image: url( AM.jpeg); background-color:#F5EBEF; background-size:cover; background-position:center; background-attachment: fixed; display: flex; " >
    <div class="container-fluid" id="FormConnectUs"> 
        <div class="container" style="text-align: -webkit-center;">
            <div style="width: 70%;">
        <form method="POST" >
     <div class="row" style="text-align: -webkit-center;margin-top: 100px;" >
       <div class="col-12  " >
    <h1 style="color:#603a44 ; font-size:30px; font-weight: bold;font-family: Tahoma; " > Contact Us </h1>
        </div>
   </div><br/>        
  <div class="row " style="text-align: -webkit-center;  " >
  <div class="col-md-6 col-sm-12"  >
     <input type="text" name="fname" placeholder="First name " size="50"  style="border-radius: 20px; background:#ffffff ;  padding: 10px; width: 100%;  margin-top: 20px;    border: none;box-shadow: 0 0 10px -6px;"  required >
      </div>
  <div class="col-md-6 col-sm-12" >
    <input type="text" name="lname" placeholder="Last name " size="50" style="border-radius: 20px; background:#ffffff ;  padding: 10px; width: 100%; margin-top: 20px; border: none;box-shadow: 0 0 10px -6px;"   required> 
 </div>
 </div><br/>

 <div class="row " style="text-align: -webkit-center; " >
  <div class="col-12 ">
      <input type="tel" name="phone" placeholder="Phone Number" size="14" style="border-radius: 20px; background:#ffffff ;  padding: 10px; width: 100% ;border: none;box-shadow: 0 0 10px -6px;" required>
      </div>
    </div><br/>
    <div class="row " style="text-align: -webkit-center;" >
      <div class="col-12">
       <input type="text" placeholder="Email" name="email" size="50" style="border-radius: 20px; background:#ffffff ;  padding: 10px; width: 100% ;border: none;box-shadow: 0 0 10px -6px;" required> 
          </div>
            </div><br/> 
            <div class="row  " style="text-align: -webkit-center;">
                <div class="col-12">
          <textarea name="message"   placeholder="Your Message " style="border-radius: 20px; background:#ffffff ;  padding: 10px; width: 100%; height: 150px;border: none;box-shadow: 0 0 10px -6px; " required></textarea><br/>
                </div>
            </div><br/>
            <div class="row " style="text-align: -webkit-center;">
 <div class="col-12 " > 
    <button type="submit" name="send" style="background-color:#CC5C7D; color: white; border-radius:20px; padding: 5px; width: 150px; border: none; ">
                        send
          </button>
     </div>
            </div>
        </form>
        </div>       
    </div>
    </div>
</body>
</body>
</html>

<?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost;dbname=project;",$username,$password);

if(isset($_POST['send'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $addComment= $database->prepare("INSERT INTO contactus (first_name,last_name,email,phone,message)
     VALUES(:firstname,:lastname,:email,:phone,:message)");

    $addComment->bindParam("firstname",$fname); 
    $addComment->bindParam("lastname",$lname); 
    $addComment->bindParam("email",$email); 
    $addComment->bindParam("phone",$phone); 
    $addComment->bindParam("message",$message);  
    $addComment->execute();

    require_once 'mail.php';
    $mail->Subject = 'website';
    $mail->addAddress('safanader30@gmail.com','تم التعليق على موقعنا ');
    $mail->Body = $mail->body='<h1>'.$message.'</h1>';
    $mail->send();
    
ob_end_flush();
// if(mail($to,$subject,$body)){
//         echo ' true';
// }
}
?>
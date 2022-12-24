<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>sign up </title>
        <meta name="viewport" content="width=device-width,intial-scale=1.0"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            @media (max-width:1000px) {
   
               #FormSignUp{
                   width: 100%;
               }
            }
            @media (min-width:1001px) {
                #FormSignUp{
                    width: 70%;
                }
          
            }
      </style>
        
    </head>
    <body style="  background-image: url( AM.jpeg); background-color:#F5EBEF; background-size:cover; background-position:center; background-attachment: fixed;   " >
       
        <div class="container-fluid"  > 
            <div class="container"style="text-align: -webkit-center; margin-top: 60px;padding-left: 0;padding-right: 0;" >
                <div id="FormSignUp">
                    <form method="POST" >
                <div class="row "  style="text-align: -webkit-center;  " >
                    <div class="col-12 " >
                        <h1 style="color:#603a44 ; font-size:30px; font-weight: bold;font-family: Tahoma; " > Sign Up </h1>
                    </div>
                </div>
                
                
                <div  style="padding: 24px; background-color: #CC5C7D; border-radius: 58px;"  > <br/>

                <div class="row " style="text-align: -webkit-center;"  >
                    <div class="col-12" >
                        <img src="BM.png" style="width: 150px;"/>
                    </div>   
                </div><br/>

                <div class="row " style="text-align: -webkit-center;"  >
                    
                    <div class="col-sm-12 col-md-6" >
                        
<input type="text" name="fname" placeholder="First name " maxlength="50"  style="border-radius: 20px; background:#ffffff ;  padding: 10px; width: 100%; margin-top: 20px;    border: none;box-shadow: 0 0 10px -6px; " size="50"  required />
                        
                    </div>
                        
                        <div class="col-sm-12 col-md-6"  >
                            <input type="text" name="lname" placeholder="Last name " maxlength="50" style="border-radius: 20px; background:#ffffff ;  padding: 10px; width: 100%; margin-top: 20px;    border: none;box-shadow: 0 0 10px -6px; "  size="50"  required/> 
            
                        </div>
                    
                </div><br/>
        
                <div class="row " style="text-align: -webkit-center;" >
                    <div class="col-12">
                        <input type="text" placeholder="Email"name="email" maxlength="50" style="border-radius: 20px; background:#ffffff ;  padding: 10px; width: 100%; border: none;box-shadow: 0 0 10px -6px; " required/> 
                    </div>
        
                </div><br/>
                <div class="row " style="text-align: -webkit-center;" >
                    <div class="col-12">
                        
                <input type="text" name="phone" placeholder="Phone Number" minlength="14" maxlength="14" style="border-radius: 20px; background:#ffffff ;  padding: 10px; width: 100%; border: none;box-shadow: 0 0 10px -6px;" maxlength="14" required/>
                        
                    </div>
        
                </div><br/>
                <div class="row " style="text-align: -webkit-center; "  >
                    <div class="col-12">
                <input type="text" name="password" placeholder="Password"  title="Must contain at least one number and one uppercase and lowercase letter , and at least 8 or more characters"
                style="border-radius: 20px; background:#ffffff ;  padding: 10px; width: 100%; border: none;box-shadow: 0 0 10px -6px;" minlength="8" maxlength="50" required/>
                    </div>
                </div><br/>
                <div class="row " style="text-align: -webkit-center;" > 
                    <div class="col-12">
                        <input type="text" name="confirmpass" placeholder="Password" style="border-radius: 20px; background:#ffffff ;  padding: 10px; width:100%; border: none;box-shadow: 0 0 10px -6px; " minlength="8" maxlength="50" required/>
                    </div>
                </div><br/>
                <div class="row" style="text-align: center; "  >
                    <div class="col-12" > 
                        <button type="submit" name="register" style="background-color:#603A44; color: white; border-radius:20px; padding: 5px; width: 150px; border: none;">
                           sign in 
                           <img src="arow.png" style="width: 9px;" alt="">
                        </button>
                    </div>
                </div>
            
                <div class="row" style="text-align: -webkit-center; "  >
                    <div class="col-12" > 
                        <p type="text" id="text" style="color: #ffffff; ; font-size:15px; font-weight: bold;font-family: Tahoma;margin-top: 10px; " >
                            Don't have an account?  
                            <a href="login.php" style="color:#603A44; text-decoration: none;"> Sign in Now</a>
                        </p>
                       
                    </div>
                </div>
                <div class="row" style="text-align: -webkit-center;"  >
                    
                    <div class="col-4"  >
                        <div style="content: none ; display:block; width:72%;height: 2px;background: #ffffff; position: absolute;left: 0; margin-left:50% ;top: 30%;"></div>
                    
                    </div>
                    <div class="col-4" > 
                        <p type="text" id="text" style="color:#ffffff;  font-size:15px; font-weight: bold;font-family: Tahoma; position:relative ;" >
                            OR 
                        </p>
                       
                    </div>
                    <div class="col-4"  >
                        <div style="content: none ; display:block;width: 72%;height: 2px; background:#ffffff;position: absolute ;right: 0;  top: 30%; margin-right: 50%;"></div>
                    
                    </div>
                    
                        
                </div>
                   
                   
             
                <div class="row" style="text-align: -webkit-center; "  >
                    <div class="col-12" > 
                        <p type="text" id="text" style="color:#ffffff;  font-size:15px; font-weight: bold;font-family: Tahoma; " >
                            Connect with
                            
                            
                        </p>
                       
                    </div>
                    
                        
                </div>
                <div class="row" style="text-align: -webkit-center; "  >
                    <div class="col-12" > 
                        <a href="#"> <img src="CM.png" style="width: 35px; " /> </a>
                       
                    </div>
                    
                        
                </div>
                
            </div>
            
        </div>
        </div>     
    </div> 
   
    </form>
</div>
        </div>
            
        </div>     
 
    </body>
</html>
<?php

$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost;dbname=project;",$username,$password);

if(isset($_POST['register'])){
    $checkEmail = $database ->prepare("SELECT * FROM register WHERE email = :Email");
    $email =$_POST['email'];
    if (filter_var($email , FILTER_VALIDATE_EMAIL) === FALSE){
   
      echo '<div class="alert alert-danger" role="alert">
        You Entered Is Not Valid Email
  </div>';
  }else
    $checkEmail->bindParam("Email",$email);
    $checkEmail->execute();
 
      if($checkEmail->rowCount()>0){
          echo '<div class="alert alert-danger" role="alert">
          This account is already in use 
        </div>';
      }else{
          $fname= $_POST['fname'] ;
          $lname= $_POST['lname'] ;
          $email= $_POST['email'] ; 
          $phone= $_POST['phone'];
          $password=$_POST['password'];
          $confirmpass=$_POST['confirmpass'];
          $addUser = $database->prepare("INSERT INTO register(firstname,lastname,email,
password,confirmpass,phone,SECURITY_CODE,ROLE)
 VALUES (:FirstName,:LastName,:Email,:Password,:ConfirmPassword,:PhoneNumber,:SECURITY_CODE,'USER')");

        $addUser->bindParam("FirstName",$fname);
        $addUser->bindParam("LastName",$lname);
        $addUser->bindParam("Email",$email);
        $addUser->bindParam("Password",$password);
        $addUser->bindParam("ConfirmPassword",$confirmpass);
        $addUser->bindParam("PhoneNumber",$phone);
        $securityCode= md5(date("h:i:s"));
        $addUser->bindParam("SECURITY_CODE", $securityCode);
      if ($password <> $confirmpass) {
          echo '<div class="alert alert-danger" role="alert">
         Your passwords dont match 
    </div>';
        }else{
        if($addUser->execute()){ echo '<div class="alert alert-success" role="alert">
          Account successfully created
        </div>';
        require_once 'mail.php';
      
echo $email.'<br>';
$mail->addAddress($email);
$mail->Subject = 'رمز تحقق من بريد الكتروني ';
 $mail->Body = $mail->body='<h1>شكرا لتسجيلك في موقعنا</h1>'.
"<div> رابط تحقق من الحساب". "</div>".
"<a href='http://localhost/project/active1.php?code=".$securityCode."'>"
."http://localhost/project/active1.php"."?code=".$securityCode ."</a>" ;
$mail->setFrom("safanader30@gmail.com", "safaa");
$mail->send();

      }
       else{
        echo '<div class="alert alert-danger" role="alert">
        An unexpected error occurred 
   </div>';
       }     
    }
  }
}     
?>
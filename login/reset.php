<!DOCTYPE html>
<html lang="en">
    <head>
        <title>اعادة تعيين كلمة المرور</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="  background-image: url( AM.jpeg); background-color:#F5EBEF; background-size:cover; background-position:center; background-attachment: fixed;   " >
    
<main class="container" m-auto style="max-width: 720px; margin-top: 50px;">
<?php
    if (!isset($_GET['code'])){
        echo '<form method="POST">
        <input class="form-control"  type="email" name="email" placeholder="Email" maxlength="50" required/><br>
        <button class="btn btn-warning m-3" margin-center mt-3 w-100 type="submit" name="restpassword"> ارسال رابط اعادة تعيين كلمة المرور الى بريد الكتروني</button>
    </form>';
    }else if(isset($_GET['code']) && isset($_GET['email'])){
        echo '<form method="POST">
        <div class="p-3 shadow mb-3">ضع كلمة مرور جديدة</div>
        <input class="form-control" type="text" name="password" required/>
        <button class="btn btn-warning" mt-3 w-100 type="submit" name="newpassword">اعادة تعيين كلمة مرور </button>

        </form>';
    }
    ?>    
   
        <?php
        if(isset($_POST['restpassword'])){
            $username = "root";
            $password = "";
            $database = new PDO("mysql:host=localhost;dbname=project;",$username,$password);
            $checkEmail= $database->prepare("SELECT * FROM register WHERE email = :email");
            $checkEmail->bindParam("email",$_POST['email']);
            $checkEmail->execute();

            if($checkEmail->rowCount()>0){
                require_once 'mail.php';
                $user =$checkEmail->fetchObject();
                $mail->addAddress($_POST['email']);
                $mail->Subject = 'اعادة تعيين كلمة مرور ';
                $mail->Body = $mail->body= 'رابط اعادة تعيين كلمة مرور <br>'.
                '<a href="http://localhost/project/reset.php?email='.$_POST['email'].'&code='.$user->SECURITY_CODE.'">
                http://localhost/project/reset.php?email='.$_POST['email'].'&code='.$user->SECURITY_CODE.'</a>';
                ;
                $mail->setFrom("safanader30@gmail.com", "safaa");
                $mail->send();

                echo '<div class="alert alert-success" role="alert">
                تم ارسال رابط لاعادة تعيين كلمة مرور الى حسابك
              </div>';
                
                
            }
            else{
                echo '<div class="alert alert-danger" role="alert">
                هذا بريد الكتروني غير مسجل لدينا
              </div>'
                ;
            }
        }
        ?>
   <?php
        if(isset($_POST['newpassword'])){
            $username = "root";
            $password = "";
            $database = new PDO("mysql:host=localhost;dbname=project;",$username,$password);

            $updatePassword=$database->prepare("UPDATE register SET password = :password  WHERE email =:email");
            $updatePassword->bindParam("password",$_POST['password']);
            $updatePassword->bindParam("email",$_GET['email']);
            $updatePassword->execute();
            if($updatePassword->execute()){
                echo '<div class="alert alert-success" role="alert">
                تم اعادة تعيين كلمة المرور بنجاح
              </div>'
                ;

            }else{
                echo '<div class="alert alert-danger" role="alert">
                فشل اعادة تعيين كلمة المرور 
              </div>'
                ; 
            }


        }
   ?>

   </main>
    </body>
</html>
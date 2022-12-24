<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost;dbname=project;",$username,$password);
if(isset($_GET['code'])){

$checkcode = $database->prepare("SELECT SECURITY_CODE	 FROM register WHERE SECURITY_CODE=:SECURITY_CODE	");
$checkcode->bindParam("SECURITY_CODE",$_GET['code']);
$checkcode->execute();
if($checkcode->rowCount()>0){
$update = $database->prepare("UPDATE register SET SECURITY_CODE = :NEWSECURITY_CODE ,
ACTIVATED=true WHERE SECURITY_CODE = :SECURITY_CODE");
$securityCode= md5(date("h:i:s"));
$update->bindParam("NEWSECURITY_CODE",$securityCode);
$update->bindParam("SECURITY_CODE",$_GET['code']);
$update->execute();
if($update->execute()){
    echo '<div class="alert alert-success" role="alert">
   تم التحقق من حسابك بنجاح
  </div>';
  echo '<a class="btn btn-warning" href="login.php">login</a>';
}
else{
    echo '<div class="alert alert-danger" role="alert">
   هذا الكود لم يعد صالحا للاستخدام
</div>';
}
}
}

?>
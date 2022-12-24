<form method="POST">
    <input type="text" name="text" required/>
    <button type="submit" name="add">ADD</button>
    <button type="submit" name="exit">Logout</button>
</form>
<?php
if(isset($_POST['add'])){
    $username = "root";
    $password = "";
    $database = new PDO("mysql:host=localhost;dbname=project;",$username,$password);

    $AddItem = $database->prepare("INSERT INTO categories(category,userID) VALUES(:text,:userID)");
    $AddItem->bindParam("text",$_POST["text"]);
    session_start();
    $userID=$_SESSION['user']->id;
    $AddItem->bindParam("userID",$userID);
  if($AddItem->execute()){
      echo 'تم اضافة بنجاح';
  }
}
?>
<?php
session_start();
if(isset($_SESSION['user'])){
    if($_SESSION['user']->ROLE ==="USER"){
echo '<div class="shadow p-3 mb-1 bg-white rounded mt-5>Welcome'.$_SESSION['user'] .'</div>';
echo '<a class="btn btn-light shadow w-100 mb-1" href="product.php">'. 'product'.'</a>';
echo "<form> <button class='btn btn-danger w-100' type='submit' name='logout'>"."logout"."</button> </form>" ;
    }else{
        header("location:http://localhost/project/login.php",true);
    }
}
?>
<?php
session_start();
if(isset($_SESSION['user'])){
    if($_SESSION['user']->ROLE ==="USER"){

'<a class="btn btn-light shadow w-100 mb-1" href="user/product.php">'. 'product'.'</a>';

    }else{
        header("location:http://localhost/project/login.php",true);
    }
}
?>
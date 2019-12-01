<?php
session_start();
?>
<?php
if(isset($_POST['logout'])){
    unset($_SESSION['empid']);
    header('Location: login.php');
}
?>
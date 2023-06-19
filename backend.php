<?php 
include 'connectionDB.php';
if (!isset($_SESSION))
{
  session_start();  
}
$errors = array();

if(isset($_POST['submitL'])){
    if(count($errors) == 0){        
    $username = mysqli_real_escape_string($conn,$_POST['usernameL']);
    $password = mysqli_real_escape_string($conn,$_POST['passwordL']);  
    $passwordHashed = md5($password);
    $select = "SELECT * FROM users WHERE login LIKE '$username' and password like '$passwordHashed';";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){      
        if($row['admin'] == 1)
            $_SESSION['admin'] = true;        
        $_SESSION['username'] = $_POST['usernameL'];
        $_SESSION['userID'] = $row['id'];
        header('location:uvod.php');        
    }
    else        
        array_push($errors,"Zadali ste zlé meno alebo heslo");
    }
}

if(isset($_POST['submitR'])){    
    if($_POST['passwordR'] != $_POST['passwordR2']){
        array_push($errors, "Hesla sa nezhoduju");
    }
    if(count($errors) == 0){
    $username = mysqli_real_escape_string($conn,$_POST['usernameR']);
    $password = mysqli_real_escape_string($conn,$_POST['passwordR']);  
    $password2 = mysqli_real_escape_string($conn,$_POST['passwordR2']);       
    $select = "SELECT * FROM users WHERE login LIKE '$username'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) == 0){
        $passwordHashed = md5($password);
        $insert = "INSERT INTO users(login, password) VALUES ('$username','$passwordHashed');";
        $result = mysqli_query($conn, $insert);
        if($result){                           
            header('location:uvod.php');
        }
        else
            array_push($errors,"Niečo sa pokazilo");  
    }
    else
        array_push($errors,"Uživateľ už existuje");
    }
}
if(isset($_GET['logout'])){
    session_destroy(); 
    header('location:uvod.php');
}

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $delete = "DELETE FROM `users` WHERE `users`.`id` = $id";
    $result = mysqli_query($conn, $delete);
    if($result){
        header('location:admin.php');
    }
}
if(isset($_GET['resetid'])){
    $id = $_GET['resetid'];
    $update = "UPDATE `users` SET `offerID` = '0' WHERE `users`.`id` = $id;";
    $result = mysqli_query($conn, $update);
    if($result){
        header('location:admin.php');
    }
}



?>

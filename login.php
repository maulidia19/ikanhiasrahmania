<?php 
require_once 'functions.php'; 
session_start(); 
  
if (isset($_SESSION['login'])) { 
    header('Location: beranda.php'); 
    exit; 
} 
  
if (isset($_POST['submit'])) { 
    if (is_null(login($_POST))) { 
        echo "<script> 
            alert('Username not registered!'); 
        </script>"; 
    } else if (!login($_POST)) { 
        echo "<script> 
            alert('Wrong username/ password!'); 
        </script>"; 
    } else { 
        $_SESSION['login'] = true; 
        $userData = getUserData($_POST['username']); 
        $_SESSION['level'] = $userData['level']; 
        $_SESSION['name'] = $userData['username']; 
        // $_SESSION['photo'] = $userData['image']; 
        $_SESSION['login'] = true; 
        header('Location: beranda.php'); 
         //if ($userData['level'] == 'admin') { 
             //header('Location: beranda.php'); 
         } 
 
        exit; 
    }  
?>

<DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="./login.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Masuk</h1>
            <form action="" method="post">
                <label>Username</label><br>
                <input type="text" name="username"><br>
                <label>Password</label><br>
                <input type="password" name="password" id=""><br>
                <button class="submit" name="submit">Kirim</button>
            </form>
        </div>     
    </body>
</html>

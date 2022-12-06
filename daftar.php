<?php 
require_once 'functions.php';
session_start(); 
if (isset($_SESSION['login'])) { 
    header('Location: login.php'); 
    exit; 
} 
 
$alert = ''; 

if (isset($_POST['submit'])) { 
    if ($_POST['password'] != $_POST['confirm']) { 
        $alert = "Password confirm doesn't match!"; 
    } else { 
        $result = register($_POST); 
        if ($result) { 
            echo "<script> 
                alert('Registration Success!'); 
                document.location.href = 'login.php'; 
            </script>"; 
        } else { 
            echo "<script> 
                alert('Registration Failed!'); 
                document.location.href = login.php; 
            </script>"; 
        } 
    } 
} 
 
?>

<DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Daftar</title>
        <link rel="stylesheet" href="./login.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Daftar</h1> 
            <form action="" method="post">
                <label>Username</label><br>
                <input type="text" name="username"><br>
                <label>Email</label><br>
                <input type="text" name="email"><br>
                <label>Password</label><br>
                <input type="password" name="password"><br>
                <label>Confirm Password</label><br>
                <input type="password" name="confirm"><br>
                <button type="submit" class="submit" name="submit">Kirim</button>
            </form>
        </div>     
    </body>
</html>


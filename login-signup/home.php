<?php
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['firstName'])) {

     ?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>HOME</title>
          <link rel="stylesheet" type="text/css" href="index.css">
     </head>

     <body>
          <h1>Hello,
               <?php echo $_SESSION['firstName']; ?>
          </h1>
          <a href="logout.php">
               <button class="custom-btn btn-2" id="logout"><span>Logout</span></button>
          </a>

     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>
<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}


?>
<html>
<head>

</head>
<body>
<h2> welcome <?php echo $_SESSION['username'];?></h2>
<a href="logout.php">LOGOUT</a>
</body>
</html>   
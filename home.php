<?php
session_start();
include_once 'connect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM carUser WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
 <div id="left">
    <label></label>
    </div>
    <div id="right">
     <div id="content">
          <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
</body>
</html>

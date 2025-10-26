Session.php
<?php
session_start();
if(isset($_SESSION['views']))
{
echo"SESSION VIEWS:".$_SESSION['views'];
$_SESSION['views']++;
}
else
{ 
$_SESSION['views']=1; 
echo"SESSION DOES NOT EXIST";
}
?>

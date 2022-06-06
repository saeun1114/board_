<?php 
$conn=mysqli_connect("localhost","sungkyul","123456", "sungkyul");
mysqli_query($conn, "set names utf8-general-ci");
mysqli_query($conn, "delete from testbd where num='$_GET[no]'");

mysqli_close($conn);
?>
<meta http-equiv='refresh' content="1; url=list.php" >
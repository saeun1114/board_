<?php
$conn=mysqli_connect("localhost","sungkyul","123456", "sungkyul");
mysqli_query($conn, "set names utf8-general-ci");
$result=mysqli_query($conn,"select * from testbd order by num DESC");
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>게시판</title>
 </head>
 <body>
  <h1>자유게시판</h1>
  <hr>
  <table>
	<tr bgcolor="#5D9932">
		<th width=70><font color="white">번호</th>
		<th width=200><font color="white">제목</th>
		<th width=120><font color="white">작성자</th>
		<th width=120><font color="white">작성일</th>
		<th width=70><font color="white">조회수</th>
	</tr>
<?php
	while( $row=mysqli_fetch_array($result)) {
?>
	<tr>
		<td width=70><?php echo $row['num'] ?> </td>
		<td width=70><a href="read.php?no=<?=$row['num'] ?>" > <?php echo $row['title'] ?> </a> </td>
		<td width=70><?php echo $row['name'] ?> </td>
		<td width=70><?php echo $row['wdate'] ?> </td>
		<td width=70><?php echo $row['hit'] ?> </td>
	</tr>

<?php
}
?>
			<button type="button" onclick="location.href='write.html' ">글쓰기</button>
  </table>
 </body>
</html>

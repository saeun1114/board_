<?php
$conn=mysqli_connect("localhost","sungkyul","123456", "sungkyul");
mysqli_query($conn, "set names utf8-general-ci");
$result=mysqli_query($conn,"select * from testbd where num='$_GET[no]' ");
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">

  <title>게시판</title>
 </head>
 <body>
	<form action="writePorc.php" method="POST">
	<table width=600 cellpadding=2 cellsacing=1 bgcolor="#5D9932">
		<tr>
			<td colspan=2 ><font color="white">글 보 기</font></td>
		</tr>


		<tr bgcolor="#E8FAD9">
			<th width=90>번 호</th>
			<td width=250><?php echo $row['num'] ?> </td>
		</tr>

		<tr bgcolor="#E8FAD9">
			<th width=90>제 목</th>
			<td width=250><?php echo $row['title'] ?> </td>
		</tr>

		<tr bgcolor="#E8FAD9">
			<th width=90>내 용</th>
			<td width=250><?php echo $row['content'] ?> </td>
		</tr>

		<tr bgcolor="#E8FAD9">
			<th width=90>작성자</th>
			<td width=250><?php echo $row['name'] ?> </td>
		</tr>

		<tr bgcolor="#E8FAD9">
			<th width=90>작성일</th>
			<td width=250><?php echo $row['wdate'] ?> </td>
		</tr>

		<tr bgcolor="#E8FAD9">
			<th width=90>조회수</th>
			<td width=250><?php echo $row['hit'] ?> </td>
		</tr>


		<tr bgcolor="#E8FAD9">
			<td colspan=2 align=right height=30>
				<button type="button" onclick="location.href='list.php' ">목록</button>
				<button type="button" onclick="location.href='write.html' ">글쓰기</button>
				<button type="button" onclick="location.href='edit.php?no=<?=$row['num'] ?>' ">수정</button>
				<button type="button" onclick="location.href='delete.php?no=<?=$row['num'] ?>' ">삭제</button>
			</td>
		</tr> 

	</table>
		
	</form>
 </body>
</html>


<?php
$cnt = $row['hit'] + 1;
mysqli_query($conn, "update testbd set hit=hit + 1 where num='$row[num]'");
?>
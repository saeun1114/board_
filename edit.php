<?php
$conn=mysqli_connect("localhost","sungkyul","123456", "sungkyul");
mysqli_query($conn, "set names utf8-general-ci");
$result=mysqli_query($conn,"select * from testbd where num='$_GET[no]' ");	//GET방식으로 가져온 no를 17번줄의
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">

  <title>게시판</title>
 </head>
 <body>
	<form action="editPorc.php?no=<?=$_GET['no'] ?>" method="POST">			<!--여기서 그대로 no를 가져감-->
	<table width=600 cellpadding=2 cellsacing=1 bgcolor="#5D9932">
		<tr>
			<td colspan=2 ><font color="white">글 수 정</font></td>
		</tr>
		<tr bgcolor="#E8FAD9">
			<td>제목</td>
			<td><input type="text" name="title", value="<?=$row['title'] ?>" size=60 maxlength=20 /></td>
		</tr>
		<tr bgcolor="#E8FAD9">
			<td>내용</td>
			<td><textarea name="content" cols="70" rows="15"> <?=$row['content'] ?> </textarea> </td>
		</tr>
		<tr bgcolor="#E8FAD9">
			<td>작성자</td>
			<td><input type="text" name="name", value="<?=$row['name'] ?>" size=20 maxlength=20 /></td>
		</tr>
		<tr bgcolor="#E8FAD9">
			<td colspan=2 align=right height=30>
				<input type="submit" value="저장"/> &nbsp;&nbsp;
				<input type="reset" value="취소"/> &nbsp;&nbsp;
				<input type="button" value="이전" onClick="history.back(1)"/>
			</td>
		</tr> 
	</table>
		
	</form>
 </body>
</html>
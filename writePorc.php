<?php
	$con = mysqli_connect("localhost","sungkyul","123456", "sungkyul");
	$name = $_POST['a1'];
	$name = addslashes($name);
    $title = $_POST['a2'];
    $title = addslashes($title);
    $content = $_POST['a3'];
    $content = addslashes($content);
	$wdate = $_POST['a4'];
    $wdate = addslashes($wdate);
	$hit = $_POST['a5'];
    $hit = addslashes($hit);

	$sql = "insert into testbd (
			name,
			title,
			content,
			wdate,
			hit
	)";
	
	$sql = $sql. "values(
			'$_POST[name]',
			'$_POST[title]',
			'$_POST[content]',
			now(),
			0
	)";


	if($con->query($sql)){ 
	  echo '<script>alert("작성 성공")</script>'; 
	}else{ 
	  echo '<script>alert("작성 실패")</script>';
	}

	mysqli_close($mysqli);

?>

<script>
	location.href = "list.php";
</script>

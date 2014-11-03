<?php
/**
* version: 1.0
* author:  bkwy.org
*/
?>
<html>
	<head>
		<title>Hackfun</title>
	</head>
<body>
	<h2 align=center> Sql Injection Test !</h2>

	<?php require "nav.php"; ?>
<div align='center'>
<form action="querry.php">
	Rank<select name='rank'>";
<?php
	for($i=0; $i<=4; $i++){ #可以在这里增加过滤测试机制

			echo "<option value='".$i."'>".$i."</option> ";
	}
	?>
	</select><br>
	<textarea  name='id' cols=85 rows=15> 
	</textarea><br>
	<input type='submit' value='Hackfun'>

</div>
</form>
</body>
</html>
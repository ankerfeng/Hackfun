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
<h2 align = center> Just SQL test </h2>
<?php require "nav.php"; ?>
<?php require 'com.php'; ?>
<div align = center>
	<form action="dosql.php">
		<textarea name="sql" cols="85" rows="15" ></textarea><br/>
		<input type="submit" value="Hackfun"/>
	</form>
</div>
<?php
	if(!isset($_GET['sql']))
		die("you haven't input anything !");
	else{
		$sql = $_GET['sql'];
		echo "<b>your sql input was: </b>".$sql."<br/>";
	}
	$con = mysql_connect($db_host, $db_user, $db_pass);
    if(!$con)
    	die("mysql connect feild ! ".mysql_error());
    if(!mysql_select_db($db_name, $con))
		die("<b>database select feild! :</b>".mysql_error()."</br>");
    if(!$res=mysql_query($sql, $con))
    	die("<b>Do Sql feild as: </b>".mysql_error()."<br>");
    else{
    	echo "<b>The sql is ok! </b><br/>";
    	$row=@mysql_num_rows($res); //非select不报警告
		if($row){
			echo "<b>The querry result is: </b><br/>";
			while($row = mysql_fetch_object($res)){
                foreach ($row as $key => $value) {
                	echo $key.":".$value."</br>";
                    }
			    }
		    }
		else if(mysql_affected_rows() != -1){
            $row = mysql_affected_rows();
			echo "<b>Update affected:</b>".$row."<br/>";
		}
		else
			echo "But  nothing in the database!<br/>";
    }
    mysql_close($con);
  

?>
</body>
</html>
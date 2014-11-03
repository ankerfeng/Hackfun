<<<<<<< HEAD
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
<h2 align=center> Sql Injection Result !</h2>
<?php require "nav.php"; ?>
<?php require 'com.php'; ?>
<div >
<?php
	if(isset($_GET['rank'])&&intval($_GET['rank'])>=0)
		$rank = intval($_GET['rank']);
	else
		die ('<b> Just Hackfun with the variable "id" !</b><br/>');
    $id = $_GET['id'];
    echo "<b>your input is : </b>".$id."<br/>";
    $con = mysql_connect($db_host, $db_user, $db_pass);
    if(!$con)
    	die("mysql connect feild ! ".mysql_error());
    require "filter.php";
	switch ($rank) {
		case 0:echo "<b>The input is not filter at all: </b>".$id."<br/>";break;
		case 1:
				$id = filter1($id);
				echo "<b>The input is filtered by filter1: </b>".$id."<br/>";break;
		case 2:
                $id = filter2($id);
		        echo "<b>The input is filtered by filter2: </b>".$id."<br/>";break;
		case 3:
		        $id = filter3($id);
		        echo "<b>The input is filtered by filter3: </b>".$id."<br/>";break;
        case 4:
        		$id = filter4($id);
        		echo "<b>The input is filtered by filter4: </b>".$id."<br/>";break;
        default:
        		die("<b>You just allow to select the rank 1~4</b>!<br/>");

	}
	if(!mysql_select_db($db_name, $con))
		die("<b>database select feild! :</b>".mysql_error()."</br>");
	$sql = "select * from users where id = ".$id;
	echo "<b>The querry sql is: </b>".$sql."<br/>";
	$res = mysql_query($sql, $con);
	if(!$res)
	    die("<b>The hint: </b>".mysql_error());
	else{
		echo "<b>The sql is ok! </b><br/>";
		
	    	$row = @mysql_num_rows($res);
	    	$row2 = mysql_affected_rows();

		if($row){
			echo "<b>The querry result is: </b><br/>";
			while($row = mysql_fetch_object($res)){
                foreach ($row as $key => $value) {
                	echo $key.":".$value."</br>";
                    }
			    }
		    }
		else if($row2 != -1){
			echo "<b>Update affected: </b>".$row2."<br/>";
		}
		else 
			echo "But  nothing in the database!<br/>";
	}
	mysql_close($con); 
?>
</div>
</body>
=======
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
<h2 align=center> Sql Injection Result !</h2>
<?php require "nav.php"; ?>
<?php require 'com.php'; ?>
<div >
<?php
	if(isset($_GET['rank'])&&intval($_GET['rank'])>=0)
		$rank = intval($_GET['rank']);
	else
		die ('<b> Just Hackfun with the variable "id" !</b><br/>');
    $id = $_GET['id'];
    echo "<b>your input is : </b>".$id."<br/>";
    $con = mysql_connect($db_host, $db_user, $db_pass);
    if(!$con)
    	die("mysql connect feild ! ".mysql_error());
    require "filter.php";
	switch ($rank) {
		case 0:echo "<b>The input is not filter at all: </b>".$id."<br/>";break;
		case 1:
				$id = filter1($id);
				echo "<b>The input is filtered by filter1: </b>".$id."<br/>";break;
		case 2:
                $id = filter2($id);
		        echo "<b>The input is filtered by filter2: </b>".$id."<br/>";break;
		case 3:
		        $id = filter3($id);
		        echo "<b>The input is filtered by filter3: </b>".$id."<br/>";break;
        case 4:
        		$id = filter4($id);
        		echo "<b>The input is filtered by filter4: </b>".$id."<br/>";break;
        default:
        		die("<b>You just allow to select the rank 1~4</b>!<br/>");

	}
	if(!mysql_select_db($db_name, $con))
		die("<b>database select feild! :</b>".mysql_error()."</br>");
	$sql = "select * from users where id = ".$id;
	echo "<b>The querry sql is: </b>".$sql."<br/>";
	$res = mysql_query($sql, $con);
	if(!$res)
	    die("<b>The hint: </b>".mysql_error());
	else{
		echo "<b>The sql is ok! </b><br/>";
	    $row = mysql_num_rows($res);
	    $row2 = mysql_affected_rows($res);
		if($row){
			echo "<b>The querry result is: </b><br/>";
			while($row = mysql_fetch_object($res)){
                foreach ($row as $key => $value) {
                	echo $key.":".$value."</br>";
                    }
			    }
		    }
		else if($row2!=-1){
			echo "<b>Update affected: </b>".$row2."<br/>";
		}
		else 
			echo "But  nothing in the database!<br/>";
	}
	mysql_close($con); 
?>
</div>
</body>
>>>>>>> c1430f31282f8c5dad98e5157e7f46ff1fa06361
</html>
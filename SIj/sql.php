<?php
    require 'com.php';
	$con = mysql_connect($db_host, $db_user, $db_pass);
    if(!$con)
    	die("Could not connect: " .mysql_error()."<br/>");
    
    if(mysql_query("CREATE DATABASE ".$db_name,$con))
        echo "*Database created ".$db_name."<br/>";
    else
    	die("*Database created feild !".mysql_error()."<br/>");

    if(mysql_select_db($db_name, $con))
    	echo "*use ".$db_name."<br/>";
    else
    	die("*No such db_name as ".$db_name.mysql_error()."<br/>");

    $sql = "CREATE TABLE users
    (
    id int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (id),
    usr varchar(15),
    pass varchar(15)
    )";
    if(mysql_query($sql, $con))
        echo "*created table users !"."<br/>";
    else
        die ("*created tables feild! ".mysql_error()."<br/>");

    $sql = "insert into users VALUES (1, 'admin', 'password')";
    $sql2 = "insert into users VALUES (2, 'admin2', 'password2')";
    $sql3 = "insert into users VALUES (3, 'admin3', 'password3')";
    if(mysql_query($sql, $con)){
        echo $sql."<br/>";
        if(mysql_query($sql2)){
            echo $sql2."<br/>";
            if(mysql_query($sql3)){
                echo $sql3."<br/>";
                echo "all done!";
            }
        }
    }
    else
    	die("*insert feild !".mysql_error());

    mysql_close($con)
?>
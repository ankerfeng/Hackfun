<<<<<<< HEAD
<?php
/**
* version: 1.0
* author:  bkwy.org
*/
?>
<?php
	function filter0($str){
		return $str;
	}
	function filter1($str){
		$str = "'".$str."'";
		return $str;
	}
	function filter2($str){
	#过滤掉 ' " /
		    $str = filter1($str);
			$str = mysql_real_escape_string($str);
			return $str;
	}
	function filter3($str){
	#基于黑名单过滤掉关键字 //只用于练习，漏洞百出且比较白痴
		$str = filter2($str);
		$par = array("select", "union", "and", "or");
		$rep = array("", "", "", "");
		$str = str_replace($par, $rep, $str);

		return $str;
	}
	function filter4($str){
		#终极过滤。
		$str = stripcslashes($str);
		$str = mysql_real_escape_string($str);
		return "'".$str."'";
	}
	function filter5($str){
        #更多的测试脚本，可以自己来添加。
	}
=======
<?php
/**
* version: 1.0
* author:  bkwy.org
*/
?>
<?php
	function filter0($str){
		return $str;
	}
	function filter1($str){
		$str = "'".$str."'";
		return $str;
	}
	function filter2($str){
	#过滤掉 ' " /
			$str = mysql_real_escape_string($str);
			return $str;
	}
	function filter3($str){
	#基于黑名单过滤掉关键字 //只用于练习，漏洞百出且比较白痴
		$str = filter2($str);
		$par = array("select", "union", "and", "or", ",");
		$rep = array("", "", "", "", "");
		$str = str_replace($par, $rep, $str);

		return $str;
	}
	function filter4($str){
		#终极过滤。
		$str = stripcslashes($str);
		$str = mysql_real_escape_string($str);
		return "'".$str."'";
	}
	function filter5($str){
        #更多的测试脚本，可以自己来添加。
	}
>>>>>>> c1430f31282f8c5dad98e5157e7f46ff1fa06361
?>
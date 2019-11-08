<?php
header("content-type:text/html;charset=utf-8");
	$str = "abcdef0123456!?";
	$str1 = str_shuffle($str);
	$str2 = substr($str1, 0,6);
	$spanStr = "";
	for($i = 0; $i<strlen($str2); $i++){
		$a = mt_rand(0, 255);
		$b = mt_rand(0, 255);
		$c = mt_rand(0, 255);
		$spanStr.= "<span style='color:rgb(".$a.",".$b.",".$c.")'>".$str2[$i]."</span>";
	}
	echo $spanStr;
	echo "<hr />";	
	$fileName = "upload/img/a.gif";
//	$fileName = "upload/text/a.txt";
	
	$index = strrpos($fileName,".");
	$ext = substr($fileName, $index);
	echo $ext;
	
	$arr = array(".txt",".png","jpg");
	if(in_array($ext, $arr)){
		echo "文件类型正确";
	}else{
		echo "文件类型错误";
	}
?>
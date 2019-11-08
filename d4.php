<?php
	$arr = array(
		array("name"=>"zhangsan1","score"=>90),
		array("name"=>"zhangsan2","score"=>70),
		array("name"=>"zhangsan3","score"=>80)
	);
?>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<p>hello</p>
		<table border="1" cellspacing="" cellpadding="">
			<tr><th>姓名</th><th>分数</th></tr>
		
			<?php foreach($arr as $i){?>
				
				<tr>
					<td><?php echo $i["name"]?></td>
					<td><?php echo $i["score"]?></td>
				</tr>
				
			<?php } ?>
		</table>
	</body>
</html>
<!Doctype HTML>
<html>
<head>
<script src='js/jquery-3.3.1.min.js' ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<table class="table">
		<?php for($i=0;$i<20;$i++):
		$rand  = rand(10000,50000);
		?>
		<tr><td><?=$i?></td><td><?=$rand?></td>
			<td>
				<input type="button" onclick="change_class('<?=$rand?>',this)" value="Change Color"/>
				
			</td>
		</tr>
		<?php endfor;?>
	</table>
	<script>
		function change_class(param,elem){
			var color='red';
			if(param>40000){
				color = "orange";
			}
			else if(param>30000){
				color = "green";
			}
			else if(param>20000){
				color = "yellow";
			}


			$(elem).closest('.table').css('background-color',color);
		}
	</script>
</body>
</html>

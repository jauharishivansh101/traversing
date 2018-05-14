<!doctype html>
<html>
<head><script src='js/jquery-3.3.1.min.js' ></script></head>
<style type="text/css">
	img{
		height: 10px;
	}
</style>
<body>

	<table>
		
		<tr><td>Shiv</td><td><input type="text" class="text"></td><td><img src="delete.png"></td></tr>
		<tr><td>Sumit</td><td><input type="text" class="text"></td><td><img src="delete.png"></td></tr>
		<tr><td>Total</td><td><input type="text" id="total"></td></tr>
		<tr><td><button type="button">Add More</button></td></tr>
	</table>
</body>
<script type="text/javascript">
	function calc(){
				var result=0;
				$('input[type="text"].text').each(function(){
					if($(this).val()!=""){
						result = result + parseInt($(this).val());
					}
				});
				$('#text5').val(result);
			}
			$(document).ready(function() {
				$(".text").keyup(function(){
					calc();
				});
				$(document).on('click','.delete',function(){
					$(this).closest('tr').remove();
					calc();
				})
			
</script>

</html>
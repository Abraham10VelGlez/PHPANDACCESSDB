<!DOCTYPE html>
<html>
<head>
<meta name="author" content="Ing AbrahamVG">

	<title>Resumen de Movimientos</title>
	<style type="text/css" media="print">
	@media print {
		#jq {display: none;}
	}

	</style>
	<!-- jQuery -->
    <script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#btnexecute').click(function(){
				//alert("guardar");
				var a1 =$('#bdcx').val();
				var a2 =$('#textavg').val();
				///alert(a1+ " ------- "+a2);
				$.post('exe.php',{a1:a1,a2:a2},function(e){
					//$('#jq').css('display','none');
$('#avg123').html('');
$('#avg123').html(e);
window.print();

				});


			});
		});

	</script>
</head>
<body>

<center>
	<table id="jq" >
		<tr>
			<td>
				<center>
				Nombre del Plugin del Municipio:	
				</center>
				
			</td>
		</tr>
		<tr>
			<td>
			<center>
				<input type="text" id="bdcx" name="bdcx"></input>
			</center>
			</td>
		</tr>
		<tr>
			<td>
			<center>
			Anexos:
			</center>
			</td>
		</tr>
		<tr>
			<td>
			<center>
			<textarea id="textavg" name="textavg"></textarea>
			</center>
			</td>
		</tr>
		<tr>
			<td>
			<center>
			<button type="button" id="btnexecute"  > Imprimir </button>
			</center>
			</td>
		</tr>
	</table>

</center>

<center>

<div id="avg123">
	
</div>
</center>
</body>
</html>

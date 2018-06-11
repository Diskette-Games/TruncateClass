<!DOCTYPE html>
<html>
	<head>
	<title>Truncate Class - Gerador</title>
	<link href="img/iconesite.JPG" type="image/x-icon" rel="shortcut icon">
	<!-- Inclusao de libs js -->
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/hericusa-forum.js"></script>
	<script type="text/javascript" src="js/supreme.js"></script>
	<!-- inclusao do css -->
	<link rel="stylesheet" type="text/css" href="css/supreme.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />			
	</head>
	<body class="content">
		<br>
	<center><h1 class="wrt">GERADOR DE CLASSES PHP</h1></center>
	<br>
	<br>
	<br>
		<div id="form" class="well container">
			<form action="#" name="dataForm" id="dataForm" method="post" onsubmit="return false">
				<div class="alinhado" style="align-items: center;">
				<table>									
					<tr>
						<th>
							<div class="well teste">
								<legend>Opçõess de Métodos</legend>
								<label>ToString:&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<input type="checkbox" name="tostring" value="true"/></label>
								<label>Equals:&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<input type="checkbox" name="equals" value="true"/></label>
								<label>Construtor por array: <input type="checkbox" name="contrutorPorArray" value="true"/></label>
								<br>
								<br>
								<br>							
							</div>
						</th>
						<th>
							<div class="well">
								<legend>Persistência</legend>
								<label>DAO: <input type="checkbox" name="DAOPHP" value="true"/> </label>
								<label>Nome da tabela:</label><input placeholder="Table DB" type="text" name="tabela" value=""/> 
								<br>
								<br>
								<br>
							</div>
						</th>
						<th>
							<div class="well">
								<legend>Sobre a Classe</legend>
								<label>Classe Pai:</label> <input type="text" name="classePai" placeholder="Objeto Persistente" />
								<label>Nome da Classe:</label> <input placeholder="Example Class" type="text" name="name"/>
							</div>
						</th>	
					</tr>		
				</table>
				</div> 															
				<div>
					<table class="table">
						<tr>
							<th id="atributos"></th>
						</tr>
					</table>
				</div>					
				<div class="btn-cont"><button id="addAtribute" class="btn btn-primary">Adicionar Atributo</button></div>
				<br>
				<br>
				<center><div class="well center"><button id="submit" class="btn btn-large btn-success">Gerar</button></div></center>
				
			</form>
		</div>

		<pre class="container">
			<div id="resposta">
				<center>
					<legend>Code Class:</legend>
				</center>
			</div>
		</pre>
		<div id="selectContent" class="hide">
			<select>
				<option value="int">Integer</option>
				<option value="string">String</option>
				<option value="number">Number</option>
				<option value="date">Date</option>
				<option value="blob">Blob</option>
				<option value="object">Object</option>
				<option value="Array">Array</option>
			</select>
		</div>
		<div id="selectNulo" class="hide">
			<select>
				<option selected="selected" value="true">SIM</option>
				<option value="false">NAO</option>
			</select>
		</div>
	</body>
</html>
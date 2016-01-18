<!DOCTYPE >
<html>
	<head>
		<title>Sistema Base de Datos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="Contenedor">
			<div id="Logotipo">
				<p>Data Base</p>
			</div> 
			<div id="Datos">	
				<form  method="post" name="" action="#" >
					<div id="Orden">
						Orden: <br /> 
						<input type="text" name="number" id="CampoOrden"/>
					</div>
					<div id="Columna">
						Nombre Columna: <br /> 
						<input type="text" name="txtcolumna" id="CampoColumna"/>
					</div>
					<div id="Tipo">
						Tipo: <br /> 
						<select name="tipo">
							<option value="Selecciona">Selecciona una opción ...</option>
							<option value="Nombre">Nombre</option>
							<option value="Telefono/Fax">Telefono</option>
							<option value="Email">E-mail</option>
							<option value="Fecha">Fecha</option>
							<option value="Ciudad">Ciudad</option>
							<option value="C.P">Codigo Postal</option>
						</select>
					</div>
					<div id="Ejemplos">
						Ejemplos: <br /> 
						<input type="text" name="txtejemplo" id="CampoEjemplo"/>
					</div>
					<div id="Agregar">
						<a href="#"><img src="images/+.svg" /></a>
					</div>
					<div id="Eliminar">
						<a href="#"><img src="images/-.png" /></a>
					</div>
				</form>
			</div>
			<div id="Exportar">
				<div id="Titulo">
					<h1>Exportar</h1>
				</div>
				<div id="TiposDeExportacion">
					<a id="SQLTitulo" href="sql.php">SQL</a>
					<a id="XMLTitulo" href="#">XML</a>
				</div>
				<div id="SQL">
					<form  method="post" name="" action="#">
						<div id="NombreTabla">
								Nombre de la Tabla: <input type="text" name="number" id="CampoTabla"/>
						</div>
						<br />
						<br />
						<div id="TipoBase">
							Tipo Base de Datos: 
							<select name="tipo">
								<option value="Selecciona">Selecciona una opción ...</option>
								<option value="MySQL">MySQL</option>
								<option value="Postgres">Postgres</option>
								<option value="Oracle">Oracle</option>
								<option value="SQLserver">SQL Server</option>
							</select>
						</div>
					</form>
				</div>
				<div id="Generar">
					<button type="submit" class="positive" name="save"> Generar </button>
				</div>
			</div>
		</div>
	</body>
</html>
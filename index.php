<!doctype html>
<html>
<head>
	<title>Crud simples</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<h1>Crud simples</h1>
<form name="insert" method='post'>
	<div>
		<label for="name">Nome:</label>
		<input type="text" name="name" id="name" value="" tabindex="1" />
	</div>
	<div>
		<label for="endereco">Endereço:</label>
		<input type="text" name="endereco" id="endereco"  value="" tabindex="1" />
	</div>
	<div>
		<label for="email">E-mail:</label>
		<input type="text" name="email" id="email" value=""  tabindex="1" />
	</div>
	<div>
		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha" value="" tabindex="1" />
	</div>

	<div>
		<input type="submit" value="Enviar" />
	</div>
</form>

<span class="aviso hide"></span>

<h2> Lista de usuários</h2>
<button id="refreshTable">Atualizar</button>
<div id="loadTable">


</div>

<script type="text/javascript" src="js/index.js"></script>

<footer>
<p>Created by <a href="https://github.com/rodrigorssa">Me.</a></p>
</footer>
</body>
</html>
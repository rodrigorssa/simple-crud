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

<script type="text/javascript">

$(document).ready(function(){


$('#loadTable').load("table.php");
$('#refreshTable').click(function(){
	$('#loadTable').load("table.php");
});

 $('form').submit(function(e){
 	e.preventDefault();
 	form=$(this);
 var nameForm= form.attr('name'),
 	action=(nameForm=='insert') ? 'php/inserirdados.php' : 'php/inserirdados.php?edit',
 	time=setTimeout(function(){
 			$('.aviso').hide().removeClass("success alert");
 		},5000);


 	$.post(action,form.serialize()).done(function(res){
 	time;
 		 		$('.aviso').addClass(res.class).html(res.msg).show();
 		form.each( function(){
 			this.reset(); 
 		});
 	}).fail(function(res){
 		time;
 		$('.aviso').addClass('alert').html(res.responseText).show();
 	});
 });


});
</script>

<footer>
<p>Created by <a href="https://github.com/rodrigorssa">Me.</a></p>
</footer>
</body>
</html>
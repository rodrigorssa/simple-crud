<?php include "php/retornausers.php";
if($retorno==array()) die("Nenhum usuário cadastrado ainda..."); ?>
<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>


		<?php foreach ($retorno as $item) { ?>

		<tr>
			<td><?php echo $item['id'] ?></td>
			<td><?php echo htmlspecialchars($item['name']) ?></td>
			<td><button class="btn-edit" value="<?php echo $item['id'] ?>">Edit</button> <button class="btn-delete" value="<?php echo $item['id'] ?>">Delete</button></td>

		</tr>
			<?php	} ?>
	</tbody>
</table>

<script type="text/javascript">
$(document).ready(function(){
	$('.btn-edit').click(function(){

var id=this.value,
	data=new Array();
$.post("php/retornaunico.php",{id: id},function(res){

$('input[name=name]').val(res.name);
$('input[name=endereco]').val(res.endereco);
$('input[name=email]').val(res.email);
$('input[name=senha]').val(res.senha);
$('input[type=submit]').val("Editar");
$('form').attr('name','edit').append("<input type='hidden' name='id' value='"+res.id+"' />");
 }).fail(function(e){
 	console.log(e);
 });




});

$('.btn-delete').click(function(){
	var id=this.value;

	if(!confirm("U sure?")) return;

	$.post("php/deleteusers.php",{id:id}).done(function(res){
		//alert(res);
		$('#loadTable').load("table.php");
	}).fail(function(){
		alert("algo deu errado, tente novamente mais tarde.")
	});
});
});

</script>
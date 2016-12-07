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

	$('#loadTable').load("table.php");
	
	}).fail(function(){
		alert("algo deu errado, tente novamente mais tarde.")
	});
});
});
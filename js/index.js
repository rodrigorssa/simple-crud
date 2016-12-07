
$(document).ready(function(){

$('#loadTable').load("table.php");

$('#refreshTable').click(function(table){
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
 		$('#loadTable').load("table.php");
 		if(nameForm!='insert') {
 			form.attr('name',"insert");
 			$('input[type=hidden').remove();
 			$('input[type=submit]').val("Enviar");
 		}
 	}).fail(function(res){
 		time;
 		$('.aviso').addClass('alert').html(res.responseText).show();
 	});
 });


});
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

<script type="text/javascript" src="js/table.js"></script>
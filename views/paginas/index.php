<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nome</th>
			<th scope="col">Imagem</th>
			<th scope="col">Ação</th>
		</tr>
	</thead>

	<?php foreach ($paginas as $p): ?>
		<tbody>
			<tr>
				<td><?=$p['id']?></td>
				<td><?=$p['nome']?></td>
				<td><a href="<?=site_url().$p['imagem']?>" target="_blank"><img src="<?=site_url().$p['imagem']?>" class="img-responsive imgExpand" alt=""></a></td>
				<td><a href="<?=site_url()?>Paginas/edit/<?=$p['id']?>"><i class="icon-spell-check">Editar</i></a></td>
			</tr>
		</tbody>
	<?php endforeach ?>

</table>
<?php

if (isset($_SESSION['feedback']) && $_SESSION['feedback']) {
	echo $_SESSION['feedback'];
}

unset($_SESSION['feedback']);

?>

</style>
<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>NOME</th>
		<th>TÍTULO</th>
		<th>IMAGEM</th>
		<th>AÇÃO</th>
		<th>
		</th>
	</tr>

<?php foreach ($fotos as $foto): ?>
	<tr id="link">
		<td><?=$foto['id']?></td>
		<td><?=$foto['nome']?></td>
		<td><?=$foto['titulo']?></td>
		<td ><a href="<?=site_url().$foto['imagem']?>" target="_blank"><img src="<?=site_url().$foto['imagem']?>" class="img-responsive imgExpand"  alt=""></a></td>
		<td>
			<a href="<?=site_url()?>Fotos/edit/<?=$foto['id']?>"><i  class="mdi mdi-pencil mdi-24px"><i class="icon-spell-check">Editar</i></a>
			<a href="<?=site_url()?>Fotos/remove/<?=$foto['id']?>" style="color:#E91E63;"><i class="icon-pencil3">Remover</i></a>
		</td>
	</tr>
<?php endforeach ?>
	
</table>
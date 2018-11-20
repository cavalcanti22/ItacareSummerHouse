<?php
class Foto extends Model
{

	public function insert_foto($i)
	{
		$nome  		= $i['nome'];
		$titulo 	= $i['titulo'];
		$titulo2 	= $i['titulo2'];
		$subtitulo  = $i['subtitulo'];
		$subtitulo2 = $i['subtitulo2'];
		$texto 		= $i['texto'];
		$imagem 	= $i['imagem'];
		$q = "INSERT INTO fotos (nome,titulo,titulo2,subtitulo,subtitulo2,texto,imagem) VALUES ('$nome','$titulo','$titulo2','$subtitulo','$subtitulo2','$texto','$imagem')";
		return $this->execute($q);
	}


	public function get_all_fotos()
	{
		$q = "SELECT * FROM fotos";
		return $this->execute($q);
	}


	public function get_foto($id)
	{
		$q = "SELECT * FROM fotos WHERE id = '$id'";
		return mysqli_fetch_assoc($this->execute($q));
	}
	public function update_foto($id, $i)
	{
		$nome 		= $i['nome'];
		$titulo 	= $i['titulo'];
		$titulo2 	= $i['titulo2'];
		$subtitulo  = $i['subtitulo'];
		$subtitulo2 = $i['subtitulo2'];
		$texto 		= $i['texto'];
		$imagem 	= $i['imagem'];
		$q = "UPDATE fotos
			  SET
			  	nome		 = '$nome',
			  	titulo 	 	 = '$titulo',
			  	titulo2 	 = '$titulo2',
			  	subtitulo	 = '$subtitulo',
			  	subtitulo2 	 = '$subtitulo2',
			  	texto		 = '$texto',
			  	imagem		 = '$imagem'
			  WHERE
			  	id = '$id'
			 ";
			 
		return $this->execute($q);		
	}
	public function delete_foto($id)
	{
		$q = "DELETE FROM fotos WHERE id = '$id'";
		return $this->execute($q);
	}


}
?>
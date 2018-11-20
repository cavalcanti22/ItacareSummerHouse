<?php
class Fotos extends Ext
{
	private $foto;

	function __construct()
	{
		require "models/Foto.php";
		$this->foto = new Foto;

		isset($_SESSION['user']) || header("Location: ".site_url()."Auths/index");
	}

	public function index()
	{
			$data['titulo'] = 'Lista de fotos';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = "views/fotos/index";
			$data['fotos'] = $this->foto->get_all_fotos();
			return $data;
	}
	public function add()
	{
		$data['titulo'] = 'Adicionar Foto';
		$data['layout'] = 'views/layouts/admin';
		$data['view'] = "views/fotos/add";
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{

			if ( isset($_FILES['imagem']) )
			{

				if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png') AND $_FILES['imagem']['size'] <= 10000000 )
				{
					$caminho = "resources/site/img/fotos/";
					$uniqid = md5(uniqid(rand(), true));
    				$nome = $this->nome_ext($uniqid,'imagem');
					$arquivo = $caminho . $nome;

					if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
					{
						$_POST['imagem'] = $arquivo;
						if (!$this->foto->insert_foto($_POST))
						{
							unlink($arquivo);
							die("ERRO AO CADASTRAR!");
						}
					
						$data = $this->index();
					}
					else
					{
						die('HOUVE UM ERRO NO UPLOAD Do FOTO!');
					}
				}
				else
				{
					die("Permitido somente fotos com no máx. 4MB!");
				}
			}
			else
			{
				$imgantiga = $this->foto->get_foto($id);
				$_POST['imagem'] = $imgantiga['imagem'];

				if (!$this->foto->insert_foto($_POST))
				{
					die("ERRO AO CADASTRAR!");
				}
				$data = $this->index();				
			}

		}

		return $data;		
	}

	public function edit($id)
	{
		$data['foto'] = $this->foto->get_foto($id);
		if ($data['foto'])
		{
			$data['titulo'] = 'Atualizar Site';
			$data['layout'] = 'views/layouts/admin';
			$data['view'] = "views/fotos/edit";

			if ($id > 0 AND $_SERVER['REQUEST_METHOD'] === 'POST')
			{

				if ( isset($_FILES['imagem']) AND $_FILES['imagem']['size'] > 0 )
				{
					
					if (($_FILES['imagem']['type'] == 'image/jpeg' OR $_FILES['imagem']['type'] == 'image/png' ) AND $_FILES['imagem']['size'] <= 2000000 )
					{
						$caminho = "resources/site/img/fotos/";
						$uniqid = md5(uniqid(rand(), true));
	    				$nome = $this->nome_ext($uniqid,'imagem');
						$arquivo = $caminho . $nome;

						if (move_uploaded_file($_FILES['imagem']['tmp_name'], $arquivo))
						{
							$_POST['imagem'] = $arquivo;
							if (!$this->foto->update_foto($id, $_POST))
							{
								unlink($arquivo);
								die("ERRO AO ATUALIZAR!");
							}
							else
							{
								unlink($data['foto']['imagem']);
							}
							$data = $this->index();
						}
						else
						{
							die('HOUVE UM ERRO NO UPLOAD DA foto!');
						}
					}
					else
					{
						die("Permitido somente fotos do tipo .JPG ou .PNG com no máx. 2MB!");
					}
				}
				else
				{
					$imgantiga = $this->foto->get_foto($id);
					$_POST['imagem'] = $imgantiga['imagem'];
					if (!$this->foto->update_foto($id, $_POST))
					{
						die("ERRO AO ATUALIZAR!");
					}
					$data = $this->index();				
				}

			}

			return $data;
		}
		else
		{
			die("<p style='color:red'>ESTE foto NÃO EXISTE!</p>");
		}
	}

	public function remove($id)
	{
		$data['foto'] = $this->foto->get_foto($id);
		if ($data['foto'])
		{
			if (!$this->foto->delete_foto($id))
			{
				die("<p style='color:red'>ERRO AO DELETAR!</p>");
			}

			else
			{
				unlink($data['foto']['imagem']);
			}
			$data = $this->index();
			return $data;
		}
		else
		{
			die("<p style='color:red'>ESTE foto NÃO EXISTE!</p>");
		}
	}

}
?>
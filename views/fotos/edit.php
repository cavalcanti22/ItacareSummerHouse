<form class="col-xs-6" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome"     name="nome" value="<?=$foto['nome']?>" >
  </div>

  <div class="form-group">
    <label for="titulo">Titulo</label>
    <input type="text" class="form-control" id="titulo"   name="titulo" value="<?=$foto['titulo']?>" >
  </div>

   <div class="form-group">
    <label for="titulo2">Titulo 2</label>
    <input type="text" class="form-control" id="titulo2"   name="titulo2" value="<?=$foto['titulo2']?>" >
  </div>

  <div class="form-group">
    <label for="subtitulo">Subtítulo</label>
    <input type="text" class="form-control" id="subtitulo"   name="subtitulo" value="<?=$foto['subtitulo']?>" >
  </div>

  <div class="form-group">
    <label for="subtitulo2">Subtítulo 2</label>
    <input type="text" class="form-control" id="subtitulo2"   name="subtitulo2" value="<?=$foto['subtitulo2']?>" >
  </div>

  <div class="form-group">
    <label for="imagem">Imagem</label>
    <input type="file" class="form-control" id="imagem"   name="imagem">
  </div>

      <div class="form-group col-md-12">
    <label for="texto">Texto</label>
    <textarea type="text" class="form-control" rows="5" id="editor" name="texto"> 
      <?=$foto['texto']?>
    </textarea>
    <script>
      ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
          console.log( editor );
        } )
        .catch( error => {
          console.error( error );
        } );
    </script>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-default pull-right">Atualizar</button>
  </div>
</form>
      <!-- Adicionar id = editor para ck editor funcionar -->

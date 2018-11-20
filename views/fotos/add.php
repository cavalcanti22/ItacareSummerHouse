<form class="col-xs-6" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" required>
  </div>
  <div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" id="titulo" name="titulo" required>
  </div>  

  <div class="form-group">
    <label for="titulo2">Título 2</label>
    <input type="text" class="form-control" id="titulo2" name="titulo2" required>
  </div>   

  <div class="form-group">
    <label for="subtitulo">Subtítulo</label>
    <input type="text" class="form-control" id="subtitulo" name="subtitulo" required>
  </div> 

  <div class="form-group">
    <label for="subtitulo2">Subtítulo 2</label>
    <input type="text" class="form-control" id="subtitulo2" name="subtitulo2" required>
  </div> 

  <div class="form-group">
    <label for="imagem">imagem</label>
    <input type="file" class="form-control" id="imagem" name="imagem" required>
  </div>
    <div class="form-group col-md-12">
    <label for="texto">Texto</label>
    <textarea type="text" class="form-control" rows="5" id="editor" name="texto"> 
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
  	<button type="submit" class="btn btn-default pull-right">Cadastrar</button>
  </div>
</form>
      <!-- Adicionar id = editor para ck editor funcionar -->

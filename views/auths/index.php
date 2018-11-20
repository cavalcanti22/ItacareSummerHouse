    <div class="wrapper">
      <form class="login" method="POST">
        <p class="title">Log in</p>
        <input type="email" placeholder="Email" name="email" autofocus/>
        <i class="fa fa-user"></i>
        <input type="password" placeholder="Senha" name="senha" />
        <i class="fa fa-key"></i>
        <!-- <a href="#">Forgot your password?</a> -->
        <button type="submit">
          <i class="spinner"></i>
          <span class="state">Log in</span>
        </button>
      </form>

      <footer><a target="blank" href="http://geminiweb.com.br/">by Gemini Web Floripa</a></footer>
    </p>
    <?php if (isset($_SESSION['feedback'])) 
    {
      echo $_SESSION['feedback'];
      session_unset($_SESSION['feedback']);
    } 
    ?>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script  src="<?=site_url()?>resources/admin/js/index.js"></script>


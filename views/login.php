<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php'
?>

<section class="container-login">
   <div class="sidenav">
      <div class="login-main-text">
         <img src="/Img/Logo do Projeto Integrador (fundo preto).png" alt="">
         <h2><br> Página de Login</h2>
         <p>Faça seu registro ou inicie uma <br>seção inserindo o formulário</p>
      </div>
   </div>

   <div class="login">
      <form>
         <div class="form-group my-3">
            <label>Seu nome completo</label>
            <input type="text" class="form-control" placeholder="Nome">
         </div>

         <div class="form-group my-3">
            <label>Senha</label>
            <input type="password" class="form-control" placeholder="Senha">
         </div>

         <div class="my-3">
            <button type="submit" class="btn btn-primary mx-3">Login</button>
            <a href="/sefast/views/registro.php" class="text-decoration-none btn btn-primary mx-3">Registro</a>
         </div>
      </form>
   </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php';

if (isset($_SESSION['id_usuario'])) {
   header('Location: /sefast/views/perfil.php');
}

?>

<?php if (isset($_SESSION['aviso'])) : ?>
   <section>
      <div class="alert alert-danger text-center m-3" role="alert">
         <?= $_SESSION['aviso'] ?>
         <?php unset($_SESSION['aviso']) ?>
      </div>
   </section>
<?php endif; ?>

<section class="container-login sect-login">
   <div class="imagem-login">

   </div>

   <div class="login d-flex justify-content-center align-items-stretch">
      <form action="/sefast/controllers/login_controller.php" method="post" id='form-login'>
         <div class="form-group my-3">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email">
         </div>

         <div class="form-group my-3">
            <label>Senha</label>
            <input type="password" class="form-control" name="senha" placeholder="Senha">
         </div>

         <div class="form-group my-3">
            <button type="submit" class="btn btn-primary mx-3">Login</button>
            <a href="/sefast/views/registro.php" class="text-decoration-none btn btn-primary mx-3">Registro</a>
         </div>
      </form>
   </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>
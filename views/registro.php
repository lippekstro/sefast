<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_cabecalho.php'
?>



<section class="registro d-flex justify-content-center align-items-center" id="container-form-registro">
   <form action="/sefast/controllers/usuario_add_controller.php" method="post" autocomplete="off" id="form-registro">

      <div class="my-3">
         <label for="nome">Nome</label>
         <input autocomplete="disabled" type="text" id="nome" name="nome" class="form-control" placeholder="Nome" maxlength="40" required>
      </div>

      <div class="my-3">
         <label for="email">E-mail</label>
         <input autocomplete="disabled" type="email" id="email" name="email" class="form-control" placeholder="Email" maxlength="190" required>
      </div>

      <div class="my-3">
         <label for="senha">Senha</label>
         <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
      </div>

      <div class="my-3">
         <label for="tel">Telefone</label>
         <input type="text" class="form-control" id="tel" name="tel" placeholder="Telefone">
      </div>

      <button type="submit" class="btn btn-primary"> Criar conta </button>

      <div class="my-3">
         <a class="btn btn-black" style="color: white;" href="/sefast/views/login.php">Já possui uma conta? Fazer login</a>
      </div>
   </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/sefast/templates/_rodape.php'
?>
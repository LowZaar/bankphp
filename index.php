<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>teste</title>
  </head>
  <body>
    <?php
    require_once 'contaBanco.php';
      $p1 = new contaBanco(); //Pessoa A
      $p2 = new contaBanco(); //Pessoa B

      $p1->abrirConta("CC");
      $p1->setnumConta(1111);
      $p1->setDono("Pessoa A");
      $p1->deposito(300);

      $p2->abrirConta("CP");
      $p2->setnumConta(2222);
      $p2->setDono("Pessoa B");
      //$p2->depositar(500);

      $p1->fecharConta();

      print_r($p1);
      print_r($p2);
     ?>
  </body>
</html>

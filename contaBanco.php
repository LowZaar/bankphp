<?php
   /**
   * eu nao sei o que eu to fazendo aaaaaa
   */

   $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=dadosBanco', 'postgres', '');
   sleep(5);
   $stmt = $pdo->prepare('SELECT * FROM banco', 'INSERT INTO banco(user,id,saldo) VALUES(PESSOA_A,1,00)');
   $stmt->execute();
   $pdo = null;
   sleep(60);



   class contaBanco
  {
    public $numconta;
    protected $tipo;
    private $saldo;
    private $status;
    private $dono;

    // functions
    /*public function abrirConta($t)
    {
      $this->setTipo($t);
      $this->setStatus(true);
      if ($t == "CC") {
        $this->setSaldo(50);
      }elseif ($t =="CP") {
        $this->setSaldo(150);
      }
      */

    }
    /* public function fecharConta()
    {
      if ($this->getSaldo() > 0) {
        echo "<p> Conta ainda com saldo!</p>";
      } elseif ($this->getSaldo() < 0) {
        echo "<p> Conta esta em Debito, impossivel encerrar";
      } else {
        $this->setStatus(false);
      }
      */

    }

    public function deposito($valor)
    {
      if ($this->getStatus()) {
        $this->setSaldo($this->getSaldo() + $valor);
      } else {
        echo "Erro de deposito";
      }



    }
    public function sacar($valor)
    {
      if ($this->getStatus()) {
          if ($this->getSaldo() > $valor) {
            $this->setSaldo($this->getSaldo() - $valor);
          }else {
            echo "Saldo Insuficiente!";
          }
      } else {
        echo "Nao posso sacar de uma conta fechada!";
      }
    }


    public function pagarMensal()
    {
       if ($this->getTipo() == "CC") {
         $valor = 12;
       } elseif ($this->getTipo() == "CP") {
         $valor = 20;
       }
       if ($this->getStatus()) {
         $this->setSaldo($this->getsaldo() - $valor);
         echo "<p> Mensalidade de $valor debitada";
       } else {
         echo "<p> Problemas com a conta</p>";
       }
    }

    public function __construct() {
      $this->setSaldo(0);
      $this->setStatus(false);
      echo "<p>Conta Criada sem erros</p>";

    }

    public function getnumConta()
    {
      return $this->numconta;
    }

    public function getTipo()
    {
      return $this->tipo;
    }

    public function getDono()
    {
      return $this->dono;
    }

    public function getSaldo()
    {
      return $this->saldo;
    }

    public function getStatus()
    {
      return $this->status;
    }

    public function setnumConta($numconta)
    {
      $this->numconta = $numconta;
    }

    public function setTipo($tipo)
    {
      $this->tipo = $tipo;
    }

    public function setSaldo($saldo)
    {
      $this->saldo = $saldo;
    }

    public function setStatus($status)
    {
      $this->status = $status;
    }

    public function setDono($dono)
    {
      $this->dono = $dono;
    }



    public function addSaldo($valor)
    {

    }

    public function subSaldo($valor)
    {

    }

    public function update()
    {

    }





}

 ?>

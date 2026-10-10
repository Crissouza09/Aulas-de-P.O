<?php
require_once 'pagamento.php';
class pagamentoCartao extends pagamento {
    private $numeroCartao;
    public  function __construct($valor, $numeroCartao){
        parent::__construct($valor);
        $this->numeroCartao = $numeroCartao;
    }
    public function processar(){
        return "<p>Pagamento de R$ {$this->valor} processado no cartão de número final{$this->numeroCartao}</p>";
    }
}
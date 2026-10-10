<?php
require_once 'pagamento.php';
class pagamentopix extends pagamento {
    public function processar (){
        return "<p>Pagamento de R$ {$this->valor} processado via Pix</p>";
    }
}
?>

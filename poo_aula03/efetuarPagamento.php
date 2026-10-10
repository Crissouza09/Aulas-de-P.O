<form method="post">
    Valor Pix: <input type="number" name="valorPix" step="0.01"><br>
    Valor Cartão: <input type="number" name="valorCartao" step="0.01"><br>
    Número do cartão: <input type="text" name="cartao"><br>
    <button type="submit">Enviar</button>
</form>

<?php
    require_once 'pagamentoCartao.php';
    require_once 'pagamentoPix.php';

    if ($_POST) {
        $pagamento1 = new pagamentopix($_POST['valorPix']);
        $pagamento2 = new pagamentocartao($_POST['valorCartao'], $_POST['cartao']);
        $pagamentos = [$pagamento1, $pagamento2];
        foreach ($pagamentos as $pagamento) {
            echo $pagamento->processar();
        }
    }
<?php

class Administrador{
    private string $cargo;

    public function _construct(string $cargo){
        $this->cargo = $cargo;
    }

    public function banirJogador(string $jogador):void{
        echo "o administrador está banindo o jogador: 
        $jogador\n";
    
    }
}
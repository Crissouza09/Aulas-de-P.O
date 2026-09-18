<?php

class Usuario
{
    private array $dados = [];

    public function __set(string $prop, mixed $valor): void
    {
        $this->dados[$prop] = $valor;
    }

    public function __get(string $prop): mixed
    {
        return $this->dados[$prop] ?? null;
    }

    public function __isset(string $prop): bool
    {
        return isset($this->dados[$prop]);
    }
}

$usuario = new Usuario();

// Define propriedades através do __set()
$usuario->nome = "João";
$usuario->email = "joao@email.com";

// Verifica se as propriedades existem
var_dump(isset($usuario->nome));
var_dump(isset($usuario->email));
var_dump(isset($usuario->telefone));

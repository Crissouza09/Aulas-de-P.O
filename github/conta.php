<?php
Class Conta{
    private int $id;
    private string $email;
    private string $senha;  
    
    public function_construct(int $id, string $email, string $senha){
    $this->id=$id;
    $this->email=$email;
    $this->senha=password_hash($senha, PASSWORD_DEAFULT);


}

public function login(string $senha): bool {
    return password_verify($senha, $this->$senha);
}
public function alterarSenha(string $nova): void{
    $this->senha=password_hash($nova, PASSWORD_DEFAULT)
    echo "Ei psiu deu certo" . \n;

}
//Getters
public function getId(): int{ return $this->id;}
public function getEmail(): string{ return $this->email;}

$admin = new Administrador("Moderador");
$admin->banirJogador("Patati")
}
?> 
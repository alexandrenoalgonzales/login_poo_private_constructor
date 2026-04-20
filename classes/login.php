<?php

namespace classes;

class Login {
    // Agora as propriedades estão protegidas
    private $user;
    private $senha;

    // O construtor recebe os dados assim que você dá o "new Login"
    public function __construct($usuarioInformado, $senhaInformada) {
        $this->user = $usuarioInformado;
        $this->senha = $senhaInformada;
    }

    public function Logar() {
        if($this->user == "ale" && $this->senha == "123") {
            return "Usuário " . $this->user . " logado com sucesso!";
        } else {
            return "Dados inválidos.";
        }
    }
}
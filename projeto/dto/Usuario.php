<?php
  class Usuario{
	    public $id;
      public $nome;
      public $login;
      public $matricula;
      public $cargo;
      public $email;
      public $nascimento;
      public $whatsapp;
      public $linkedin;
      public $equipe;
      public $setor;
      public $perfil;
      public $ativo;
      public $acessos = array();

      //variaveis de manipulação
      public $excluir;
      public $senha;
      public $status = true;
      public $msg;
		
  }

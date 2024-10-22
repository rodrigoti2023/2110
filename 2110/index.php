<?php
# arquivo index.php
# require, include, require_one, include_one
require("Usuario.php");

$user = new Usuario("Miguel");
echo "<p> O nome de user é $user->nome</p>";
$user->sobrenome = "cabral";

echo "<p>{$user->getNomeCompleto()}</p>";
# ou echo '<p>'.$user->getNomeCompleto().'</p>';

# chama o invoke ( usar o objeto como uma função)
$user();

$user->email ='rodrigo.ro1974@aluno.ifsc.edu.br';
echo "<p>meu e-mail é $user->email";

<?php
require('./models/email.php');
require('./models/telefone.php');
require('./models/endereco.php');
require('./models/professor.php');
require('./models/aluno.php');

// Professor
$prof_email1 = new \Contato\Email;
$prof_email1->setEmail('carlos@hotmail.com');

$prof_email2 = new \Contato\Email;
$prof_email2->setEmail('carlos@gmail.com');

$prof_tel = new \Contato\Telefone;
$prof_tel->setNumero('15 958585858');

$prof_endereco = new \Pessoa\Endereco;
$prof_endereco->setLogradouro('Rua 11 de Agosto');
$prof_endereco->setCidade('Tatuí');
$prof_endereco->setUF('SP');
$prof_endereco->setCodigoPostal('18276010');

$prof = new \Pessoa\Professor;
$prof->setCodigo(1);
$prof->setNome('Carlos');
$prof->setEmail($prof_email1);
$prof->setEmail($prof_email2);
$prof->setTelefone($prof_tel);
$prof->setEndereco($prof_endereco);


// Aluno
$aluno_email = new \Contato\Email;
$aluno_email->setEmail('carlos@hotmail.com');

$aluno_tel1 = new \Contato\Telefone;
$aluno_tel1->setNumero('15 999999999');

$aluno_tel2 = new \Contato\Telefone;
$aluno_tel2->setNumero('15 958585858');

$aluno_endereco1 = new \Pessoa\Endereco;
$aluno_endereco1->setLogradouro('Rua Feliz');
$aluno_endereco1->setCidade('Tatuí');
$aluno_endereco1->setUF('SP');
$aluno_endereco1->setCodigoPostal('18276030');

$aluno_endereco2 = new \Pessoa\Endereco;
$aluno_endereco2->setLogradouro('Rua Quadrada');
$aluno_endereco2->setCidade('Tatuí');
$aluno_endereco2->setUF('SP');
$aluno_endereco2->setCodigoPostal('18276030');

$aluno = new \Pessoa\Aluno;
$aluno->setCodigo(1);
$aluno->setNome('Pombinha da Paz Silva');
$aluno->setEmail($aluno_email);
$aluno->setTelefone($aluno_tel1);
$aluno->setTelefone($aluno_tel2);
$aluno->setEndereco($aluno_endereco1);
$aluno->setEndereco($aluno_endereco2);
?>
<pre>
  <?=var_dump($prof)?>
</pre>
<hr/>
<pre>
  <?=var_dump($aluno)?>
</pre>
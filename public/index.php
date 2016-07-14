<?php
define('CLASS_DIR', '../src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

use SON\Elements\Campo;
use SON\Form;

$form = new Form;
$inputNome = new Campo(['type' => 'text', 'name' => 'nome']);
$inputSubmit = new Campo(['type' => 'submit', 'value' => 'Enviar']);
$form->addField($inputNome)->addField($inputSubmit);
?>
<html>
<head>
    <title>Design Patterns - SON</title>
</head>
<body>
<?php
$form->render();
?>
</body>
</html>
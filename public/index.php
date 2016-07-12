<?php
require_once "../autoload.php";

use SON\Elements\Input;
use SON\Form;

$form = new Form;
$inputNome = new Input(['type' => 'text', 'name' => 'nome']);
$inputSubmit = new Input(['type' => 'submit', 'value' => 'Enviar']);
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
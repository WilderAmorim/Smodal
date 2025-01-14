<?php
require(__DIR__ . "/../src/Smodal.php");

use RobsonSuzin\Smodal\Smodal;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="<?= "css/style.css"; ?>"/>
    <link rel="stylesheet" href="<?= "css/icons/styles.css"; ?>"/>
    <title>Exemplo da Smodal</title>
</head>
<body>

<div class="app_modal app_modal_existe" smodalclose="true"
     style="z-index:999;">
    <div class="app_modal_box" style="max-width: 94% !important;">
        <div><a class="app_modal_close icon-times icon-notext" smodalclose="true" style="top: 5px; right: 0;"
                href="#"></a>
        </div>
        <h1>Modal existente no DOM</h1>
    </div>
</div>

<h1>Smodal</h1>
<h4>Abrir uma modal de dialog:</h4>
<?php
$smodalinfo = (new Smodal())
    ->setSmodaltemplate('info')
    ->setSaddhtml('js-title', 'Olá você tem aqui uma mensagem para apresentar!')
    ->renderString();
?>
<a class="btn btn-normal btn-blue" href="#" <?= $smodalinfo; ?> >Abrir Modal de Informação</a>
<?php
$smodaldelete = (new Smodal())
    ->setSmodaltype('delete')
    ->setSaddhtml('js-title', 'Você em certeza que deseja apagar esse registro!')
    ->renderString();
?>

<a class="btn btn-normal btn-red" href="#" <?= $smodaldelete; ?> >Abrir Modal de Delete</a>
<hr>
<h4>Remover elemento da modal: Ex.: Dois Botões</h4>
<?php
$smodalremovelement = (new Smodal())
    ->setSmodaltype('delete')
    ->setSaddhtml('js-title', 'Você em certeza que deseja apagar esse registro!')
    ->setSremoveelement('js-cancel')
    ->setSremoveelement('js-confirm')
    ->renderString();
?>
<a class="btn btn-normal btn-blue" href="#" <?= $smodalremovelement; ?> >Abrir Modal Removendo Elemento</a>
<hr>
<h3>Abrindo Modal e abrindo uma segunda modal no callback do Ajax</h3>
<p>Adicionar data ao elemento 'js-confirm' ou seja o botão Apagar e Abrindo uma nova modal no callback do ajax!</p>
<?php
$smodaladddata = (new Smodal())
    ->setSmodaltype('delete')
    ->setSaddhtml('js-title', 'Você em certeza que deseja apagar esse registro!')
    ->setSaddhtml('js-confirm', 'Abrir Segunda Modal')
    ->setSadddata('js-confirm', 'post', 'callback.php')
    ->setSadddata('js-confirm', 'id', '1')
    ->setSremoveattr('js-confirm', 'smodalclose')
    ->setSremoveelement('js-cancel')
    ->renderString();
?>
<a class="btn btn-normal btn-blue" href="#" <?= $smodaladddata; ?> >Abrir Modal</a>
<hr>
<h4>Abrindo uma modal com um template 'teste':</h4>
<?php
$smodaltemplate = (new Smodal())
    ->setSmodaltemplate('teste')
    ->setSaddhtml('js-title', 'Esse conteúdo foi adicionado dinamicamente')
    ->renderString();
?>
<a class="btn btn-normal btn-blue" href="#" <?= $smodaltemplate; ?> >Abrir Modal</a>
<hr>
<h4>Abrindo uma modal enviando conteudo html:</h4>
<?php
$smodalhtml = (new Smodal())
    ->setSmodalhtml('Esse conteúdo foi adicionado dinamicamente')
    ->renderString();
?>
<a class="btn btn-normal btn-blue" href="#" <?= $smodalhtml; ?> >Abrir Modal</a>
<hr>
<h4>Adicionando um botão de Print na Modal:</h4>
<?php
$smodalprint = (new Smodal())
    ->setSmodaltemplate('info')
    ->setSmodalprint(true)
    ->renderString();
?>
<a class="btn btn-normal btn-blue" href="#" <?= $smodalprint; ?> >Abrir Modal</a>
<hr>
<h4>Abrindo uma modal Existente no DOM</h4>
<?php
$smodalexiste = (new Smodal())
    ->setSmodalname('app_modal_existe')
    ->renderString();
?>
<a class="btn btn-normal btn-blue" href="#" <?= $smodalexiste; ?> >Abrir Modal</a>
<hr>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?= 'js/script.js'; ?>"></script>
<script src="<?= '../src/js/smodal.js'; ?>"></script>
</body>
</html>

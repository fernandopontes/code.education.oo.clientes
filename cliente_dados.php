<?php
/*ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Clientes Code.education</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site para code.education">
    <meta name="author" content="Fernando Pontes">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/colorbox.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="container-conteudo">
    <?php
    include_once 'Cliente.php';
    include_once 'cliente_lista.php';

    if(isset($_GET['id']) && $_GET['id'] != "")
    {
        if(count($clientes) > 0)
        {
            print('<legend>Dados do cliente:</legend><br>');

            printf('<div class="row"><div class="col-sm-6 col-md-6">
                        <fiedset><label>Nome:</label><br>%s</fiedset><br><br>
                        <fiedset><label>Email:</label><br>%s</fiedset><br><br>
                        <fiedset><label>Data de nascimento:</label><br>%s</fiedset><br><br>
                        <fiedset><label>CPF:</label><br>%s</fiedset><br><br>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <fiedset><label>Telefone:</label><br>%s</fiedset><br><br>
                        <fiedset><label>Celular:</label><br>%s</fiedset><br><br>
                        <fiedset><label>Endereço:</label><br>%s, %s - %s</fiedset><br><br>
                        <fiedset><label>Cidade/Estado:</label><br>%s/%s</fiedset>
                    </div></div>',
                    $clientes[$_GET['id']]->getNome(),
                    $clientes[$_GET['id']]->getEmail(),
                    $clientes[$_GET['id']]->getDataNascimento(),
                    $clientes[$_GET['id']]->getCpf(),
                    $clientes[$_GET['id']]->getTelefone(),
                    $clientes[$_GET['id']]->getCelular(),
                    $clientes[$_GET['id']]->getEndereco(),
                    $clientes[$_GET['id']]->getNumero(),
                    $clientes[$_GET['id']]->getBairro(),
                    $clientes[$_GET['id']]->getCidade(),
                    $clientes[$_GET['id']]->getEstado());
        }
    }
    ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
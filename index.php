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

</head>

<body>
    <div id="container-conteudo">
    <?php
    include_once 'Cliente.php';
    include_once 'cliente_lista.php';

    if(count($clientes) > 0)
    {
        // Ordenação do array
        if(isset($_GET['ordem']) && $_GET['ordem'] != "")
        {
            switch($_GET['ordem'])
            {
                case 'crescente':
                    ksort($clientes);
                break;

                case 'decrescente':
                    krsort($clientes);
                break;
            }
        }

        print('<legend>Lista de clientes:</legend><br><table class="table table-striped">
                <tr><th><a href="?ordem=crescente" title="Ordem crescente" alt="Ordem crescente"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a> <a href="?ordem=decrescente" title="Ordem decrescente" alt="Ordem decrescente"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></a></th><th>Nome</th><th>Telefone</th><th>Cidade/Estado</th></tr>');
        foreach($clientes as $indice => $item)
        {
            $ordem =  $indice + 1;

            printf('<tr><td>%d</td><td><a class="iframe" href="cliente_dados.php?id=%d">%s</a></td><td>%s</td><td>%s/%s</td></tr>', $ordem, $indice, $item->getNome(), $item->getDataNascimento(), $item->getCidade(), $item->getEstado());

        }
        print('</table>');
    }
    ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.colorbox-min.js"></script>
    <script>
        $(document).ready(function(){
            $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletronico</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
    img.nota{
    height: 50px;
    }
    </style>
</head>
<body>
    <main>
        <?php 
        $saque= $_GET['saque']??0;
        $resto= $saque;
        //saque de 100
        $tot100= floor($resto/100);
        $resto %= 100;
        //saque de 50
        $tot50= floor($resto/50);
        $resto %= 50;
        //saque de 10
        $tot10= floor($resto/10);
        $resto %= 10;
        //saque de 5
        $tot5= floor($resto/5);
        $resto %= 5;
        ?>
        <h1>Saque Realizado de R$<?= round($saque,2)?> Realizado</h1>
        <p>O caixa eletronico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="" class="nota">x<?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="" class="nota">x<?=$tot50?></li>
            <li><img src="imagens/10-reais.jpg" alt="" class="nota">x<?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="" class="nota">x<?=$tot5?></li>
        </ul>
        <button onclick="javascript:window.location.href='index.html'">Realizar outro saque</button>
    </main>
    
</body>
</html>
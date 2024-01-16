<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $dividendo = $_REQUEST['d1'] ?? 0;
    $divisor = $_REQUEST['d2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="" method="request">
        <label for="d1">Dividendo</label>
        <input type="number" name="d1" id="d1" value="<?=$dividendo?>">
        <label for="d2">Divisor</label>
        <input type="number" name="d2" id="d2" value="<?=$divisor?>">
        <input type="submit" value="Analisar">

        </form>
    </main> 
    
    <section>
        <h2>Estrutura da divisão</h2>
        <?php 
        //Calculos
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>
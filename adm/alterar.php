<?php

include "../cod/functions.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../cod/alterar.php" method="post">
        <input type="hidden" value="<?php echo $_GET['campo']?>" name="tipo">
        <textarea name="texto" id="" cols="20" rows="20"><?php echo retornoTexto($_GET['campo']);?>
        </textarea>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
<?php

function retornoTexto($area){
    include "conecta.php";
    $sql = "SELECT * FROM base WHERE tipo = '$area'";
    $query = $auau->query($sql);
    $dados = $query->fetch_array();

    return $dados['texto'];
}

?>
<?php

session_start();

if(isset($_SESSION['id_transacao'])) {
    $id_transicao = $_SESSION['id_transacao'];
    $idUser = $_SESSION['idUser'];
    echo "tem id " . $id_transicao;
    require_once 'conexao.php';

    $Detalhes = $conn->prepare($sql = "DELETE FROM transacoes WHERE `transacoes`.`id_transacao` = ?");

    $Detalhes->bind_param("s", $id_transicao);

    $Detalhes->execute();
    $resulDetalhes = $Detalhes->get_result();

} else {
    exit();
}





?>
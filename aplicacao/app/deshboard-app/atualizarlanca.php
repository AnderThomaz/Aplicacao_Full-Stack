
<?php 

session_start();


$id_transacao = $_SESSION['id_transacao'];

$sobre = $_POST['sobre'];
$categoria = $_POST['Desc'];
$valor = $_POST['valor'];
$date = $_POST['data'];
// Normalizar Data para o bando de dados receber
$date = date("Y-m-d", strtotime(str_replace('/', '-', $date)));

function Normalizar_valor($valor) {
    // Remover todas as pontuações
    $valor = preg_replace('/[^0-9]/', '', $valor);

    // Adicionar um ponto antes dos dois últimos dígitos decimais
    $tamanho = strlen($valor);
    $valor = substr_replace($valor, '.', $tamanho - 2, 0);

return $valor;
}

$valorParaBanco = Normalizar_valor($valor);


if($sobre == "Entrada") {
    $sobre = 0;
}else {
    $sobre = 1;
}


require_once 'conexao.php';

// Prepare a consulta SQL para atualizar os dados na tabela 'transacoes'
$AtualizarDados = $conn->prepare($sql = "UPDATE `transacoes` SET `tipo_de_transi` = ?, `data_pagamento` = ?, `valor` = ?, `Descricao` = ?, `dataInclusao` = NOW() WHERE `transacoes`.`id_transacao` = ?");

// Vincular parâmetros à consulta preparada
$AtualizarDados->bind_param("sssss", $sobre, $date, $valorParaBanco, $categoria, $id_transacao);

// Executar a consulta
$executadoComSucesso = $AtualizarDados->execute();
header('Content-Type: application/json');

if ($executadoComSucesso) {
    echo 'Dados atualizados com sucesso.';
    $response = array('executar_funcao' => true);

    echo json_encode($response);
exit();
} else {
    echo 'Houve um erro ao atualizar os dados: ' . $conn->error;
}





?>


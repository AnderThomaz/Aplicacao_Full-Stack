

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura o valor enviado pelo formulário
    $id_transacao = htmlspecialchars($_POST['id_transacao']);

    $_SESSION['id_transacao'] = $id_transacao;

    exit();

    // Processa os dados conforme necessário
    // Aqui você pode salvar os dados em um banco de dados, buscar informações, etc.

    // Exemplo de resposta
} else {

    $id_transacao = $_SESSION['id_transacao'];
    require_once 'conexao.php';

}

$idUser = $_SESSION['idUser'];


$Detalhes = $conn->prepare($sql = "SELECT * FROM `transacoes` WHERE `id_transacao` = ? AND `user_id` = ?");

$Detalhes->bind_param("ss", $id_transacao, $idUser);

$Detalhes->execute();
$resulDetalhes = $Detalhes->get_result();


if($resulDetalhes->num_rows > 0) {
    while ($valores = $resulDetalhes->fetch_assoc()) {
        $tipoDesp = $valores['Descricao'];
        $valor = $valores['valor'];
        $tipoDespesa = $valores['tipo_de_transi'];

        if ($tipoDespesa == 0){

            $tipoDespesa = "Entrada";

        } else {

            $tipoDespesa = "Saida";
        }
        $dataInclusao = date("d/m/Y", strtotime ( $valores['dataInclusao']));
        $dataPagamento = date("d/m/Y", strtotime($valores['data_pagamento']));
        
    }
}



?>


<link rel="stylesheet" href="../../estilo/StyleApp/style.css">
<link rel="stylesheet" href="../../estilo/StyleApp/Detalhes.css">





<div id="detalhes">
    <h1 class="idTrans">#<?php echo $id_transacao?></h1>


    <div id="tipoDesp" class="informacoes"><p class="titulo">Sobre</p><p><?php echo $tipoDespesa?></p></div>

    <div id="tipoDesp" class="informacoes"><p class="titulo">Categoria</p><p><?php echo $tipoDesp?></p></div>
    
    <div id="valorDespesa" class="informacoes"><p class="titulo">Valor</p><p>R$ <?php echo $valor = number_format($valor, 2, ',', '.')?></p></div>
    
    <div id="dataInclusao" class="informacoes"><p class="titulo">Data de inclusão</p><p><?php echo $dataInclusao?></p></div>

    <div id="dataPagamento" class="informacoes"><p class="titulo">Data de pagamento</p><p><?php echo $dataPagamento?></p></div>


    <div id="detalhesAtalizar" class="Atualizar">
        <form action="atualizarlanca" method="post">
            <div class="informacoes atualizardados">
                <label for="sobre">Sobre</label>
                <select name="sobre" id="sobre" class="Select" required>
                    <option value="Entrada">Entrada</option>
                    <option value="Saida">Saida</option>
                </select>
            </div>

            <div class="informacoes atualizardados">
                <label for="Categoria">Categoria</label>
                <?php require_once '../selectDespesas.php'?>
            </div>

            <div class="informacoes atualizardados" >
                <label for="valor">Valor</label>
                <input type="text" id="valor" name="valor" placeholder="R$" required>

            </div>
            

            <div class="informacoes atualizardados">
                <label for="data">Data de pagamento</label>
                <input type="text" id="data" name="data" required class="Select" placeholder="Data">
                
            </div>

            <button id="salvarAtua" type="submit">Salvar</button>

        </form>
    </div>

    <div id="ConfirExclusao">
        <div>
            <h1>Você realmente deseja apagar esse lançamento?</h1>
            <div>
                <button id="ConfirmarExcl" onclick="ConfirmarExcl()">Sim</button>
                <button id="DesitisrExcl" onclick="DesitisrExcl()">Não</button>
            </div>
        </div>
    </div>
    
    <div id="buttom">
        <button onclick="ExcluirDado()" id="Excluir"  value="Excluir">Excluir</button>
        <button onclick="AtualizarDados()" id="Atualizar" value="Atualizar">Atualizar</button>
    </div>


</div>

<script src="FuncaoButao.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>


<script>        
    
    $('#valor').mask('000.000.000.000.000,00', {reverse: true});
    $('#data').mask('00/00/0000');


</script>




<?php 
require_once '../BackEnd/favicon.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,1,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../../estilo/StyleApp/style.css">
    <link rel="stylesheet" href="../../estilo/StyleApp/styleReceita.css">
    <link rel="stylesheet" href="../../estilo/StyleApp/midiaQuery.css">
    <link rel="stylesheet" href="../../estilo/StyleApp/despesasExtras.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lançamento</title>
</head>
<body>

    <div id="modal" class="modal">
        <div class="modal-content">
        <h2>Despesa cadastrada</h2>
          
        <button><a href="despesas">Novo Lançamento</a></button>
        <button><a href="deshbord">Acessar Deshbord</a></button>
        </div>
    </div>
    <script src="../js/model.js"></script>
    
    <header>
        <span onclick="abrir_menu" id="iconmenu" class="material-symbols-outlined">
            menu
            </span>

        <h1>DESPESAS</h1>

        <span id="configuracoes" class="material-symbols-outlined">
            settings
            </span>
    </header>

    <menu id="menu" class="menu">
        <div id="header_menu">
            <span class="material-symbols-outlined" id="closemenu">
            close
            </span>

            

            
        </div>
        <ul>
                <a href="deshbord">
                <li><img src="../../estilo/StyleApp/icon/dashboard_FILL1_wght200_GRAD0_opsz24.svg" alt=""> Dashbord</a>
                <a href="recebimento">
                <li><img src="../../estilo/StyleApp/icon/paid_FILL1_wght600_GRAD0_opsz24.svg" alt="">Receita</a>
                <a href="despesas">
                <li><img src="../../estilo/StyleApp/icon/shopping_bag_FILL1_wght200_GRAD0_opsz24.svg" alt="">Despesas</a>
                <a href="relatorio">
                <li><img src="../../estilo/StyleApp/icon/equalizer_FILL1_wght200_GRAD0_opsz24.svg" alt="">Relátorio</a>
                <a href="conta">
                <li><img src="../../estilo/StyleApp/icon/person_FILL1_wght200_GRAD0_opsz24.svg" alt="">Conta</a>
                <a href="../BackEnd/app/logout">
                <li><img src="../../estilo/StyleApp/icon/exit_to_app_FILL1_wght400_GRAD0_opsz24.svg" alt="">Logout</a>
        </ul>

    </menu>

    <main>
        <div id="areaDespesas" class="despesas">
            
            <div id="lancamento">
                

                    <div id="imgaem"><img src="/app/img/2760426.jpg" alt=""></dir>

                        
            </div>

            <form  action="../BackEnd/app/despesas" method="post">
                <h1>Pagamentos</h1>
                <label for="Desc">Descrição</label>

                <input type="text" id="Desc" name="Desc" placeholder="Referencias do pagamento" required>

                <label for="valor">Valor</label>

                <input type="text" id="valor" name="valor" placeholder="R$" required>

                <label for="data">Data</label>

                <input type="text" name="data" id="data" placeholder="Data de pagamento" required>
                <button type="submit">Incluir</button>
               
            </form>

        </div>
    </main>
    

    <footer>
        <p>Desenvolvido por  </p> <img src="/app/img/LogoDev.png" alt=""> 
    </footer>
</body>

    <script src="../../js/menu.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script>        
    
        $('#valor').mask('000.000.000.000.000,00', {reverse: true});
        $('#data').mask('00/00/0000');</script>

</html>
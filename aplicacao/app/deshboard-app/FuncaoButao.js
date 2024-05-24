// Abrir Model de ataulizar dados

var ButAlualizar = document.getElementById('Atualizar')
var ModelDetalhes = document.getElementById('detalhesAtalizar')

function AtualizarDados() {
    ModelDetalhes.style.display = 'flex';
}

// Abrir Model de confirmaçao de exlucsao

var ExcluirDados = document.getElementById('Excluir')
var ConfirExclusao = document.getElementById('ConfirExclusao')

function ExcluirDado() {
        ConfirExclusao.style.display = 'flex'
}

// Confirmaçao de exlucsao

var ButExcluir = document.getElementById('DesitisrExcl') 
var ButConfirmar = document.getElementById('ConfirmarExcl') 

function DesitisrExcl() {
    ConfirExclusao.style.display = 'none'
}


function ConfirmarExcl() {
    fetch('exclusaoLanca.php')
    .then(response => response.text())
    .then(data => {
        console.log(data);
        window.parent.location.reload(); // Recarregar a página após a execução do PHP
    })
    .catch(error => console.error('Erro:', error));

}










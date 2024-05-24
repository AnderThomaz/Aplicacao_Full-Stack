
var informacao = document.getElementById('detalhe_lanca');
var fecharInform = document.getElementById('closeInfoLan');
var iframe = document.getElementById('IframeDetalhes');


function AbrirInformacao(elemento) {

    var id_transacao = elemento.querySelector('.id_transacao').textContent;

    var dados = { id_transacao: id_transacao };

    // Envia os dados via Fetch API
    fetch("../app/deshboard-app/InforDetahes.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: new URLSearchParams(dados)
    })
    .then(response => response.text())
    .catch(error => console.error('Erro:', error));

    // Agora você pode usar as informações obtidas para exibir ou fazer o que for necessário   



    if (informacao.style.right === '-450px' || informacao.style.display === '') 
        {
            informacao.style.right = '0';
        } else {

        }

    
        setTimeout(function() {
            iframe.src = iframe.src;
        }, 50); // 1000 milissegundos = 1 segundo
}

    function FecharInformacao() {
    if (informacao.style.right === '0' || informacao.style.display === '') 
        {
            informacao.style.right = '-450px';
        }

}

// Adiciona eventos de clique aos botões
fecharInform.onclick = FecharInformacao;


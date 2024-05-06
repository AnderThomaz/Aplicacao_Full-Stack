<?php
// Configurações do banco de dados
$host = 'localhost'; // Host do banco de dados
$usuario = 'root'; // Nome de usuário do banco de dados
$senha = '@Nd50102030'; // Senha do banco de dados
$banco_de_dados = 'dados'; // Nome do banco de dados

// Nome do arquivo de backup
$nome_arquivo_backup = 'backup_' . date('Y-m-d_H-i-s') . '.sql';

// Caminho completo para o utilitário mysqldump (substitua pelo caminho correto)
$mysqldump_path = 'C:/Program Files/MySQL/MySQL Server 8.0/bin/mysqldump.exe';

// Comando para fazer o backup do banco de dados usando o utilitário mysqldump
$comando_backup = "\"$mysqldump_path\" --host=$host --user=$usuario --password=$senha $banco_de_dados > \"$nome_arquivo_backup\"";

// Executa o comando de backup
exec($comando_backup, $output, $retorno);

// Verifica se o backup foi criado com sucesso
if ($retorno === 0) {
    echo "Backup do banco de dados criado com sucesso. Nome do arquivo: $nome_arquivo_backup";
} else {
    echo "Erro ao criar o backup do banco de dados.";
}
?>

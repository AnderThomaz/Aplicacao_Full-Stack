<?php 

session_start();

// entrada da senha do html
$Nchave = $_POST['Nchave'];

$_SESSION['Nchave'] = $Nchave;



if (isset($_SESSION['emailUser'])) { // captura da varivael php de outro arquivo ja salvo
    $email = $_SESSION['emailUser'];
    $chave_string = $_SESSION['ChaveRecu'];

}else{
    echo "Deu Errado";
}

if ($Nchave === $chave_string) {

    header("location: ../nova-senha?return=alterar-senha");
    unset($_SESSION['ChaveRecu']);
    unset($chave_string);
    exit();



}else {
    
    header("location: ../nova-senha?erro=chave_incorreta");
    exit();
}




?>

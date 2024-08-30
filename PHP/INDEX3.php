<form action="index3.PHP" method="POST">
    A <input type="text" name="a">
    B <input type="date" name="b">
    <button type="submit">Enviar</button>
</form>
<?php
    $a = $_GET['a'];
    $b = $_GET['b'];

$senha = $a.$b;
$senha = str_replace(" ", "", $senha);
$senha = str_replace("/", "", $senha);
$senha = str_shuffle($senha);
$senha = substr($senha, 0, 10);
print $senha;
?>

print "<h1>Ex 02</h1>";

$palavroes = array

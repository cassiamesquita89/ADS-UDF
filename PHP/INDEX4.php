<form action="index3.PHP" method="POST">
print "<h1>Ex 02</h1>";

$palavroes = array("PQP", "FDP", "merda", "VSF");

$frase = "PQP, não gosto de falar isso FDP";

print str_replace($palavroes, "***", $frase)
<?php
	$txt = "Cassia Correia de Mesquita";
	//para contar caracteres de uma string
	print strlen($txt);
	print "<br>";

	//contar palavras de um string 
	print str_word_count($txt);
	print "<br>";

	//reverter uma string
	print strrev($txt);
	print "<br>";

	//todas as letras em maiusculo
	print strtoupper($txt);
	print "<br>";

	//todas as letras em minusculo
	print strtolower($txt);
	print "<br>";

	//colocar apenas a primeira letras maiuscula
	print ucfirst($txt);
	print "<br>";

	//todas as palavras com a primeira letra maiuscula
	print ucwords($txt);
	print "<br>";

	//embaralhar a string
	print str_shuffle($txt);
	print "<br>";

	//parte de uma string 
	print substr($txt, 6, 5);
	print "<br>";

	//substituir uma string
	print str_replace("correia de", "", $txt);
	print "<br>";

//faca um algoritmo que receba em uma variavel seu nome, em outra sua data de nascimento, apos isso gere uma senha com 10 caracteres.
print $nome = "Cassia";
print "<br>";
print $data_de_nascimento = "17/09/1989";


//faca um algoritmo que receba numa frase palavroes e substitua por asteriscos na hora de imprimir



//faca um algoritmo que receba um texto Lorem Ipsum e exiba o texto, quantas palavras e quantos caracteres.













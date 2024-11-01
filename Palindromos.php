<!-- Problema de Palíndromos:
Implementa una función llamada esPalindromo que determine si una cadena de texto dada es un palíndromo. Un palíndromo es una palabra, frase o secuencia que se lee igual en ambas direcciones. -->
<?php
function esPalindromo($palabra) //Crea una función que recibe una palabra o frase como parámetro(puede ser con mayus o tildes)
{

    $tildes = ['Á', 'É', 'Í', 'Ó', 'Ú', 'á', 'é', 'í','ó', 'ú'];//Variable creada para reconocer que vocales se podran convertir
    $sinTildes = ['A', 'E', 'I', 'O','U', 'a', 'e', 'i', 'o', 'u'];//Variable que sirve para conocer en qué formato se hará la tranformación a vocales
    $palabraSinTildes = str_replace($tildes, $sinTildes, $palabra);// // Variables que almacena el cambio de la vocale ssin tildes
    $palabraSinTildes = strtolower(str_replace(' ', '',$palabraSinTildes)); //Recibe la palabra sin espacios
    $palabraInvertida = strrev($palabraSinTildes);//Invierte la palabra


    if ($palabraSinTildes == $palabraInvertida) {//Si la palabra al revés es igual a la palabra de inicio sí es un palindromo
        echo "Su palabra: \"$palabra\" sí es un palíndromo";
    } else {
        echo "Su palabra: \"$palabra\" no es un palíndromo";//Si no, no lo es
    }
}

esPalindromo("A mamá Roma le aviva el amor a mamá");
?>

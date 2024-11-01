<!-- Problema de números Primos:
Crea una función llamada esPrimo que determine si un número dado es primo o no. Un número primo es aquel que solo es divisible por 1 y por sí mismo. -->

<?php
function numeroPrimo($numero){ //Creación de la función la cual recibe un número como parámetro
    if ($numero < 2) { //Si el número es menor a 2 no puede ser un número primo
        print("No es Primo");
        return;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) { //Inicializa un for en 2 y se detendrá cuando el resultado sea menor o igual a la raiz cuadrada del número ingresado
        if ($numero % $i == 0) { //Divide el numero entre cada número en i hasta su raiz cuadrada, si hay unn residuo cero, signiifica que tiene divisor por lo tanto no es primo
            print("No es Primo");
            return;
        }
    }

    print("Es Primo"); //Si no enccuente divisor en su raiz cuadrada quiere decir que es primo
}

numeroPrimo(2);
?>
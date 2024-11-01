<!-- Problema de la serie Fibonacci:
Escribe una función llamada generar Fibonacci que reciba un número n como parámetro y genere los primeros n términos de la serie Fibonacci. La serie comienza con 0 y 1, y cada término subsiguiente es la suma de los dos anteriores. -->
<?php
function fibonacci($lastNumber){ //Se crea una función que recibe un número como parámetro
$firstNumber = 0; //Se asigna cero a la variable 
$secondNumber = 1; //Se asigna 1 a la variable (Estos serivaran como punto de partida de la sucesión)

print($firstNumber . ","); //Imprime los valores por primera vez
print($secondNumber . ",");



while (true) {//Una vez impreso los primero valores entra y se mantiene en el ciclo while mientras el número de la sucesión(result) no sea mayor al número que se ha ingresado
    $result = $firstNumber + $secondNumber;
    if ($result > $lastNumber) { //Determina la salida del bucle una vez que el resultado supuere el número ingresado
        break;
    }

    print($result . ","); // Muestra el resultado de la sucesión
    $firstNumber = $secondNumber; //Asigna el valor del segundo número al primero
    $secondNumber = $result; // Asigna el valor del resultado al segundo numero (para poder ejecutando la sucesión)
}

}
fibonacci(1000); //llamada a la función y recibe en este caso mil, mostrando los primeros mil números de la serie Fibonacci
?>

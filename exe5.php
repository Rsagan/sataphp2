<?php
    class calculadora{

        public static function soma($a, $b){
            return $a+$b;
            
        }


    }
    $resultado = Calculadora::soma(2, 18);

    echo "soma de 2 e 18 é: " . $resultado;
?>



<?php 

    //Embora tenha tentado, não consegui chegar em uma resolução qual espera o enunciado.
    //Apenas deixei minha tentativa aqui registrada.

    $array = array(1,2,5,3,4);
    function sequenciaCrescente($array){
        $newarray = count($array);
        $current = $array[0];
            for($i = $current; $i <= $newarray; $i++){
                $next = next($array);
                if($next < $i){
                     array_splice($array, $next, 1, 3);
                    }
        }
       
        print_r($array);
    }

    echo sequenciaCrescente($array);

?>
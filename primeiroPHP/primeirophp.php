<?php
    
    $preFabrica = $_REQUEST['preFabrica'];
    if($preFabrica > 0){

        if($preFabrica < 40000) {
            $preLoja = $preFabrica + ($preFabrica * 0.05);
            echo "O valor do veículo é de R$$preLoja.<br>";

        }elseif ($preFabrica >= 70000) {
            $preLoja = $preFabrica + ($preFabrica * 0.15) + ($preFabrica * 0.2);
            echo "O valor do veículo é de R$$preLoja.<br>";
        
        }else {
            $preLoja = $preFabrica + ($preFabrica * 0.1) + ($preFabrica * 0.15);
            echo "O valor do veículo é de R$$preLoja.<br>.";

        }
    }
?>
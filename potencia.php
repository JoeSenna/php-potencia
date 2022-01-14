<?php
function pot($x, $y){
    //caso seja número real
    if (!is_int($y)){
        return 'Potência precisa ser um nº inteiro'; 
    }
    
    //caso potência negativa, inverte o número
    if ($y<0){
        $x=1 / $x;
        $y=$y * -1;
    }
    
    $total=1;
    for ($i=0; $i<$y; $i++){
        $total = $total * $x;
    }
    return $total;
}
$num1 = (int) $_POST['num1'];
$num2 = (int) $_POST['num2'];

$pot = pot($num1, $num2);
echo $pot;
?>
<?php
highlight_file(__FILE__);

include('flag.php');

$p1 = $_GET['param1'];
$p2 = $_GET['param2'];
// $p1 = 5;
// $p2 = '5';
echo $p1;
echo "\n";
echo var_dump($p1);
echo "\n";
echo $p2;
echo "\n";
echo var_dump($p2);
echo "\n";
// if(isset($p1) && isset($p2)) {
    // if(strlen($p1) === strlen($p2) && $p1 !== $p2 && $p1 == $p2) {
    //     echo 'easy!';
    // }else{
    //     echo 'Not that easy!';
    // }
    if(strlen($p1) === strlen($p2)){
        echo "length same ....";
    }
    // else echo (strlen($p1));
    
    if($p1 !== $p2) {
        echo "not same data type ....."; 
    }
    if($p1 == $p2){
        echo "equal value";
    }
// }
?>


<?php 
    echo '<link rel="stylesheet" type="text/css" href="css/yo.css">';
    $a=array();
    $even=array();
    $odd=array();
    //use for loop to push 10 random number to an array
    for($i=0; $i<10; $i++){
        $a[$i]=rand(1, 1000);
    }
    //sort array a in acending order
    sort($a);
    for($f=0; $f<10; $f++){
        if ($a[$f] % 2 == 0){
            $even[]=$a[$f];
        }
        else {
            $odd[]=$a[$f];
        }
    }
    $num1 = sizeof($even);
    $num2 = sizeof($odd);
    echo "<header>";
        echo "This program will show  even or odd from an array of random numbers.";
    echo "</header>";
    echo "<left>";
         echo "<img src='assets/even.png'>";
    echo "</left>";
    echo "<right>";
         echo "<img src='assets/odd.png'>";
    echo "</right>";
    echo "<section>";
        echo "The original array in acending order: ";
        var_dump($a);
        echo "There are $num1 even numbers : ";
        var_dump($even);
        echo "There are $num2 odd numbers : ";
        var_dump($odd);
    if ($num1 > $num2){
        echo "There are more Even numbers!";
    }
    else if($num1 == $num2){
        echo "Odd = Even!";
    }
    else {
        echo "There are more Odd numbers!";
    }
    echo "</section>";
?>


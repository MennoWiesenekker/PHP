<?php

   
    echo "kwadraat van 183 = " . (183 * 183);

    echo "<br>";

    echo "Hoogste getal uit 11, 28, 9, 56, 2302, 3, 89, 1003, 2301, 230, 234, 1100, 89 is " . max(11, 28, 9, 56, 3, 89, 1003, 2301, 230, 234, 1100, 89, 2302);
    
    echo "<br>";

    echo "De wortel van 375 = " . sqrt(375);

    echo "<br>";
    
    
    echo "Gemiddelde van getallen 11, 28, 9, 56, 3 en 89 is " . ((11 + 28 + 9 + 56 + 3 + 89)/6); 
    
    
    
    echo "<br>";

    echo "Laagste getal uit 11, 28, 9, 56, 3, 89, 1003, 2301, 230, 234, 1100, 89, 2302 is " . min(11, 28, 9, 56, 3, 89, 1003, 2301, 230, 234, 1100, 89, 2302);
    

    echo "<br>";

    echo "2 tot de macht 11 is " . (2 ** 11);

    echo "<br>";

    $berekenig = ((11.28 + 9.56 + 3.89)/3);
    echo "Gemiddelde van getallen 11,28 en 9,56 en 3,89 is " . round($berekenig,2);


    echo "<br>";

    $vb1 = (3 / 2);
    $vb2 = ($vb1 * $vb1);
    $vb3 = (pi() * $vb2 * 7.05);
    echo "De inhoud van een cilinder met een hoogte van 7,05 cm. en een diameter van 3 cm. is " . floor($vb3) ."cm³";

    echo "<br>";

    $nb3 = (pi() * $vb2 * 8);
    echo "De inhoud van een cilinder met een hoogte van 8 cm. en een diameter van 3 cm. is " . floor($nb3) ."cm³";


?>  
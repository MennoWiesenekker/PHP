<?php
    //gewicht invoer
    $gewichtg = 70000;
    $lengtecm = 181;

    //gewicht omrekenen voor overzicht en eenvoudigheid
    $gewichtkg = $gewichtg / 1000;
    $lengtem = $lengtecm / 100;

    //bmi berekenen
    $BMI = round($gewichtkg / ($lengtem * $lengtem), 1);

    //printen van informatie op t scherm voor gebruiker
    echo "Uw gewicht in gram is " . $gewichtg . " = " . $gewichtkg . " kilogram";

    echo "<br>";

    echo "Uw lengte in centimeters is " . $lengtecm . " = " . $lengtem . " meter";
    
    echo "<br>";

    //categorie BMI bepalen aan de hand van een if, elseif else statement. 
    //hierbij word ook meteen de BMI weergeven.
    if ($BMI < 15) {
        echo "Uw BMI betreft: " . $BMI ." en is veel te licht.";
    } elseif ($BMI < 18.5) {
        echo "Uw BMI betreft: " . $BMI ." en is te licht.";
    } elseif ($BMI < 25) {
        echo "Uw BMI betreft: " . $BMI ." en is gezond.";
    } elseif ($BMI < 30) {
        echo "Uw BMI betreft: " . $BMI ." en is te zwaar.";
    } else {
        echo "Uw BMI betreft: " . $BMI ." en is veel te zwaar.";
    }
?>
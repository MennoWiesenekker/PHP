<?php
    $nm = "Menno wiesenekker";

    echo "Mijn naam is " . $nm;

    echo "<br>";

    echo "" . strtolower($nm);

    echo "<br>";

    echo "De lengte van de naam Menno Wiesenekker is " . strlen($nm) . " karakters.";
    
    echo "<br>";

    echo "" . ucwords($nm);
    
    echo "<br>";

    echo "De 'e' staat op positie " . strpos($nm,"e");

    echo "<br>";

    echo "Naam zonder spaties: " . str_replace(' ', '_', $nm);

    echo "<br>";

?>
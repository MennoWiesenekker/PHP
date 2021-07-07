<!--BMI Website -->
<!--Menno Wiesenekker -->
<!--233884 -->
<!-- 01-06-2021 -->

<?php
//importeren van de HTML code voor het BMI-formulier.
require "index.html";

//functie voor het berekenen van de BMI.
function BMIberekenen($gewicht,$lengte)
{
    return round($gewicht/($lengte * $lengte), 2);
}
                
    if (!empty($_POST['lengte']) && !empty($_POST['gewicht']))
    {
        //importeren van alle input uit de html.
        $naam = trim($_POST['naam']);
        $bmicat = $_POST['bmicat'];
        //controleren of lengte een nummer is, als dit true is word er gekeken of de min en max ook kloppen als dit beide klopt word de waarde van de post meegegeven aan de $lengte. 
        //Mocht er in 1 van de twee gevallen een "false" uit komen word er een fout melding uitgeschreven.
        if (is_numeric($_POST['lengte']))
        {
            if (($_POST['lengte'] > 0.30) and ($_POST['lengte'] < 2.60))
            {
                $lengte = str_replace(",",".",$_POST['lengte']);
            }
            else {
                echo "Houd u aan de meegegeven minimum en maximum waarden voor Gewicht";
            }
        }
        else 
        {
            echo "Houd u aan de regels voor lengte, dit moet een nummer zijn en geen tekst.";
        }
        //controleren of gewicht een nummer is, als dit true is word er gekeken of de min en max ook kloppen als dit beide klopt word de waarde van de post meegegeven aan de $gewicht. 
        //Mocht er in 1 van de twee gevallen een "false" uit komen word er een fout melding uitgeschreven.
        if (is_numeric($_POST['gewicht']))
        {
            if (($_POST['gewicht'] > 2.00) and ($_POST['gewicht'] < 300.00))
            {
                $gewicht = $_POST['gewicht'];
            }
            else {
                echo "Houd u aan de meegegeven minimum en maximum waarden voor Gewicht";
            }
        }
        else 
        {
            echo "Houd u aan de regels voor gewicht, dit moet een nummer zijn en geen tekst.";
        }
        //functie BMIberekenen toekenen aan de $bmi voor overzichtelijkheid in de if-statments.
        $bmi = BMIberekenen($gewicht,$lengte);

        //Aan de hand van de BMI berekening kijken in welke BMI-categorie de persoon valt.
        if ($bmi <= 16) {
            $cat = "Veel te licht";
            }
            elseif ($bmi <= 18.5) {
                $cat = "Te licht";
            }
            elseif ($bmi <= 25) {
                $cat = "Goed";
            }
            elseif ($bmi > 25) {
                $cat = "Te zwaar";
            }
            else {
                $cat = "Veel te zwaar";
            }

            //kijken of de ingevulde BMI-categorie overeenkomt met de daadwerkelijke BMI-categorie en dit uitschrijven.
            if ($bmicat == $cat) {
                echo "U valt inderdaad in de categorie '" . $bmicat . ".' Uw BMI bedraagt " . $bmi;
            }
            else
            {
                echo "U dacht in de categorie '" . $bmicat . "' te vallen. Echter bedraagt uw BMI " . $bmi . " u valt dus in de categorie: " . $cat;
            }
            //eindigen van een line voor overicht van de paginabron.
            echo PHP_EOL;
        }
    }
//Het eindigen van de PHP code en het toevoegen van het einde voor de body en html voor overzicht van de paginabron.
?>
</body>
</html>
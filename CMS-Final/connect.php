<?php

    $debug = 0;

    if (!empty($_POST['titel']) && !empty($_POST['beschrijving']) && !empty($_POST['review']) && !empty($_POST['link']) && !empty($_POST['techniek']) && !empty($_POST['datum']) && !empty($_FILES['plaatje']))
    {

        $conn = mysqli_connect('localhost', 'root', '', 'portfolio');

        // if (!$conn)
        // {   
        //     echo mysqli_connect_error();
        // }
        // else
        // {
        //     echo "Connected successfully";
        // }

        $titel = "";
        $beschrijving = "";
        $review = "";
        $link = "";
        $techniek = "";
        $datum = "";
        $plaatje = "";

        $titel = addslashes(trim($_POST['titel']));
        $beschrijving = addslashes(trim($_POST['beschrijving']));
        $review = $_POST['review'];
        $link = $_POST['link'];
        $techniek = $_POST['techniek'];
        $technieken = "";

        for($i=0; $i < count($techniek); $i++)
        {

            $technieken = implode( ', ' , $techniek);

        }

        $datum = $_POST['datum'];

        $plaatje = $_FILES['plaatje']['name'];

        $accept = array('image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/webp');

        if(in_array($_FILES['plaatje']['type'], $accept)) // er is een bestand gekozen

        {

            if(($_FILES['plaatje']['error'] == 0) && ($_FILES['plaatje']['size'] < 1000000)) // geen fouten en bestand kleiner dan 1 Mb

            {

                $data = "INSERT INTO cms (titel, beschrijving, review, link, techniek, datum, plaatje) VALUES ('$titel', '$beschrijving', '$review', '$link', '$technieken', '$datum', '$plaatje')";

                if (mysqli_query($conn, $data) === TRUE) 
                {
                    echo ""; //New record created successfully
                } 
                else {
                    echo "Error: " . $data . "<br>" . mysqli_error($conn);
                }

                if(is_uploaded_file($_FILES['plaatje']['tmp_name']))

                {// opslaan onder oude naam

                    $afbeelding = "./images/". $_FILES['plaatje']['name'];

                    if (move_uploaded_file($_FILES['plaatje']['tmp_name'], $afbeelding))

                    { // let op: directory moet bestaan en schrijfbaar zijn

                    echo "Data toegevoegd, Afbeelding opgeslagen.";

                    }

                    else {
                        echo "Error, kies een andere afbeelding of probeer opnieuw.";
                    }

                }
                else {
                    echo "Error, kies een andere afbeelding of probeer opnieuw.";
                }

            }
            else
            {
                echo "Gegevens niet opgeslagen kies een andere afbeelding, huidige afbeelding is te groot Max 1MB";
            }
        }
        else {
            echo "Bestand ongeldig, kies een (andere) afbeelding.";
        }
    }

    if ($debug == 1)
    {

        if(!empty($_POST) || !empty($_FILES))
        {
            echo "<pre>";
            print_r($_POST);
            print_r($_FILES);
            print_r(getimagesize($_FILES['plaatje']['tmp_name']));
            echo "<pre>";
            echo exif_imagetype($_FILES['plaatje']['tmp_name']);
        }
    }

?>
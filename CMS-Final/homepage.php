<?php
    require "homepage.html";
    include_once("./includes/conn.inc.php");
    $query = "select * from cms";
    $resultaat = mysqli_query($conn, $query);
    ?>

<?php
    while($rijen = mysqli_fetch_assoc($resultaat))
    {
        ?>
        <p> Titel: <?php echo $rijen['titel']; ?> </p>
        <p> Beschrijving: <?php echo $rijen['beschrijving']; ?> </p>
        <p> Review: <?php echo $rijen['review']; ?> </p>
        <p> URL: <?php $link = $rijen ['link']; echo "<a href='" . $link . "'>" . $link . "</a></p>"; ?> </p>
        <p> Techniek: <?php echo $rijen['techniek']; ?> </p>
        <p> <img src='<?php echo './images/'. $rijen['plaatje']; ?>' width="200"> </p>
        <p>_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_</p>

<?php
    }
    require("./includes/footer.inc.php");
?>
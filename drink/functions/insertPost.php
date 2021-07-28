<?php
    include("connect.php");
    //per togliere i caratteri problematici tipo apostrofi
    $testo =  $_POST['testo'];
    //$testo = explode(PHP_EOL, $testo);
    $testo = pg_escape_string($testo);

    $query = "INSERT INTO Post (testo, categoria) VALUES ('$testo', 2)";
    $result = pg_query($conn, $query);
    echo pg_fetch_all($result);

    include("disconnect.php");
    //header("index.php");
?>
<div>
    <a href="index.php"> HOME </a>
</div>
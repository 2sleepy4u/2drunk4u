<?php
    include("connect.php");
    //per togliere i caratteri problematici tipo apostrofi
    $testo = explode(PHP_EOL, $_POST['testo']);
    $testo = pg_escape_string($testo);

    $query = "INSERT INTO Post (testo, categoria) VALUES ('$testo', 1)";
    $result = pg_query($conn, $query);
    echo pg_fetch_all($result);

    include("disconnect.php");+
    //header("index.php")
?>
<div>
    <a href="index.php"> HOME </a>
</div>
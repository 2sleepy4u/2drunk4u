<?php
    include("connect.php");
    //per togliere i caratteri problematici tipo apostrofi
    $testo =  $_POST['testo'];
    //$testo = preg_split('/\r\n|\r|\n/', $testo);
    $testo = pg_escape_string($testo);

    $query = "INSERT INTO Post (testo, categoria) VALUES ('$testo', 2)";
    $result = pg_query($conn, $query);
    echo pg_fetch_all($result);

    include("disconnect.php");
?>
<script>
    window.location.replace("https://im2drunk4u.herokuapp.com");

</script>
<div>
    <a href="https://im2drunk4u.herokuapp.com"> HOME </a>
</div>
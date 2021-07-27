<?php
    include("connect.php");
    $testo = $_POST['testo'];
    $query = "INSERT INTO Post (testo, categoria) VALUES ('$testo', 1)";
    $result = pg_query($conn, $query);
    echo pg_fetch_all($result);

    include("disconnect.php");
?>

<div>
    <a href="index.php"> HOME </a>
</div>
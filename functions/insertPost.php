<?php
    include("connect.php");
    //per togliere i caratteri problematici tipo apostrofi
    $testo =  $_POST['frasi'];
    //per l'apostrofo
    $testo = pg_escape_string($testo);
    //per prendere tutte le righe
    //$textList = preg_split('/\r\n|\r|\n/', $testo);
    $testo = json_decode(json_encode($testo), true);
    $textList = json_decode($testo);
    var_dump($textList);
    foreach($textList as $x => $value){
        echo "test" . $x . "v" . $value;
    }
    /*
    foreach($textList as $row){
        echo "test" . var_dump($row['testo']);
        $query = "INSERT INTO Post (testo, categoria) VALUES ('$row', 1)";
        $result = pg_query($conn, $query);
        echo pg_fetch_all($result);
    }
    */

    include("disconnect.php");
?>
<script>
    window.location.replace("https://im2drunk4u.herokuapp.com");
</script>
<div>
    <a href="https://im2drunk4u.herokuapp.com"> HOME </a>
</div>
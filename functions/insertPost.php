<?php
    include("connect.php");
    //per togliere i caratteri problematici tipo apostrofi
    $testo =  $_POST['frasi'];
    //per l'apostrofo
    $testo = pg_escape_string($testo);
    //per prendere tutte le righe
    //$textList = preg_split('/\r\n|\r|\n/', $testo);
    
    $textList = json_decode(json_encode($testo), true);
    $array = array($textList);
    $a = json_decode($array[0], true);

    var_dump($a);
    
    foreach($a as $row){
        echo "test" . $row['testo'];
        $query = "INSERT INTO Post (testo, categoria, tipo) VALUES ('$row['testo']', 1, '$row['tipo']')";
        $result = pg_query($conn, $query);
        echo pg_fetch_all($result);
    }
    

    include("disconnect.php");
?>
<script>
   // window.location.replace("https://im2drunk4u.herokuapp.com");
</script>
<div>
    <a href="https://im2drunk4u.herokuapp.com"> HOME </a>
</div>
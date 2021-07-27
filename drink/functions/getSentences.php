<?php
    include("connect.php");

    $sentences = array();
    $query = "SELECT testo, nome FROM post, categorie WHERE categoria=categorie.id";
    $result = pg_query($conn, $query);

    $result = pg_fetch_all($result);

    $sentenceList = array();
    $index = 0;
    if($result){
        foreach($result as $row) { 
            $testo = $row['testo']; 
            $categoria = $row['nome'];

            $sentence = array('categoria' => $categoria, 'testo' => $testo);
            $sentenceList[$index++] = $sentence;
            } 
    }

    //$fp = fopen('results.json', 'w');
    //fwrite($fp, json_encode($sentenceList));
    //fclose($fp);

    echo json_encode($sentenceList);

    include("disconnect.php");
?>

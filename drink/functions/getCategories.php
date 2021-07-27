<?php
    include("connect.php");

    $categories = array();
    $query = "SELECT nome FROM categorie";
    $result = pg_query($conn, $query);

    $categoryList = array();
    $index = 0;
    if($result){
        foreach($result as $row) { 
            $categoria = $row['nome'];

            $category = array('categoria' => $categoria);
            $categoryList[$index++] = $categoria;
            } 
    }

    echo json_encode($categoryList);

    include("disconnect.php");
?>
<?php
    $db = parse_url(getenv("DATABASE_URL"));
    $db["path"] = ltrim($db["path"], "/");

    $conn = pg_connect(getenv("DATABASE_URL"));
    

 $categories = array();
    $query = "SELECT nome FROM Categorie";
    $result = pg_query($conn, $query);
    echo $result;
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

    pg_close($conn);
?>

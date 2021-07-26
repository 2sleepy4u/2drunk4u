<?php
    include("connect.php");

    $categories = array();
    $query = "SELECT nome FROM categorie";
    $result = mysqli_query($conn, $query);

    $categoryList = array();
    $index = 0;
    if($result){
        if (mysqli_num_rows($result) > 0) {
            while($row=mysqli_fetch_array($result)) { 
                $categoria = $row['nome'];

                $category = array('categoria' => $categoria);
                $categoryList[$index++] = $categoria;
              } 
        }
    }

    echo json_encode($categoryList);

    include("disconnect.php");
?>
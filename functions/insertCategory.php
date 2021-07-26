<?php
    include("connect.php");
    $nome = $_POST['category'];
    $query = "INSERT INTO Categorie (nome) VALUES ('$nome')";

    if (mysqli_query($conn, $query)) 
    {
        echo "New record created successfully \n";
    } 
    else 
    {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    include("disconnect.php");

?>

<div>
    <a href="../index.php"> HOME </a>
</div>
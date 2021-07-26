<?php
    include("connect.php");
    $testo = mysqli_real_escape_string($conn, $_POST['testo']);
    $categoria = $_POST['category'];
    $titolo = $_POST['titolo'];
    $data = date('Y-m-d H:i:s');
    $query = "INSERT INTO Post (testo, categoria, titolo, data) VALUES ('$testo', '$categoria', '$titolo', '$data')";

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
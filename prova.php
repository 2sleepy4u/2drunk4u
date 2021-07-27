<?php
    $db = parse_url(getenv("DATABASE_URL"));
    $db["path"] = ltrim($db["path"], "/");

    $conn = pg_connect(getenv("DATABASE_URL"));
    $result = pg_query($conn, "CREATE TABLE Categorie(id_categoria int not null auto_increment PRIMARY KEY, nome varchar(100) not null)");
    var_dump(pg_fetch_all($result));

    pg_close($conn);
?>

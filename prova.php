<?php
    echo 'test';
    $db = parse_url(getenv("DATABASE_URL"));
    $db["path"] = ltrim($db["path"], "/");
    $conn = pg_connect(getenv("DATABASE_URL"));
    echo 'prova';
    $result = pg_query($conn, "select 123 as test");
    var_dump(pg_fetch_all($result));
?>


<?php
    $db = parse_url(getenv("DATABASE_URL"));
    $db["path"] = ltrim($db["path"], "/");

    $conn = pg_connect(getenv("DATABASE_URL"));
    
?>
<?php
    echo 'test';
    $myPDO = new PDO('pgsql:host=ec2-54-220-170-192.eu-west-1.compute.amazonaws.com:5432;
    dbname=d8kni4s8nm50ln', 'lyaryqweiyyxma', '114a48b1cee4ec12f93cfcc7a2dbade2d5d61ff771e06aab51cae6244742f7b3');
    //$result = $myPDO->query("SELECT lastname FROM employees");
    echo $result;

?>

<?php
  $dbconn = pg_pconnect("host=ec2-54-220-170-192.eu-west-1.compute.amazonaws.com port=5432 dbname=d8kni4s8nm50ln user=lyaryqweiyyxma password=114a48b1cee4ec12f93cfcc7a2dbade2d5d61ff771e06aab51cae6244742f7b3");
    or die("Could not connect");
    echo "Connected successfully";
    pg_close($dbconn);
?>

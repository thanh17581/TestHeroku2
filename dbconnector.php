<?php
$host = 'ec2-23-21-160-38.compute-1.amazonaws.com';
$hostuser = 'jzidaowoheuhua';
$port = '5432';
$databasename = 'dbjfoa0gfe9evt';
$hosst_pass = 'fc1db7716f804b61c3182a5ff5bdeb1a34fee534a953a3d3369af51ca2b42d69';
$conn = pg_connect($host,hostuser,$port,$databasename,$hosst_pass) or die("unstable connection")
  ?>
<?php
define('DB_SERVER','sql200.epizy.com');
define('DB_USER','epiz_27004061');
define('DB_PASS' ,'utkyNmdNJo');
define('DB_NAME','epiz_27004061_newsportal');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
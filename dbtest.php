<?php
$dbhost = getenv("DATABASE_SERVICE_HOST");
$dbport = getenv("DATABASE_SERVICE_PORT");
$dbuser = 'veer';
//$dbpwd = getenv("MYSQL_ROOT_PASSWORD");
$dbname = 'sample';
$dbpwd = 'veer';
 


$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwdi,$dbname) or die("Error " . mysqli_error($connection));


$query = "SELECT * from users" or die("Error in the consult.." . mysqli_error($connection));

$rs = $connection->query($query);
while ($row = mysqli_fetch_assoc($rs)) {
    echo $row['user_id'] . " " . $row['username'] . "\n";
}

mysqli_close($connection);

?>

<?php
$dbhost = getenv("DATABASE_SERVICE_HOST");
$dbport = getenv("DATABASE_SERVICE_PORT");
$dbuser = 'veer';
//$dbpwd = getenv("MYSQL_ROOT_PASSWORD");
$dbname = 'sample';
$dbpwd = 'veer';
 


$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));


$query = "SELECT * from users" or die("Error in the consult.." . mysqli_error($connection));

echo "Here is the list of users: <br>";
$rs = $connection->query($query);
while ($row = mysqli_fetch_assoc($rs)) {
    echo "User Id: ".$row['user_id'] . " User Name: " . $row['username'] . "<br>";
}
echo "End of the list <br>";

mysqli_close($connection);

?>

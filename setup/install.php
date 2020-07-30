<?php 
try {
 $connection = new PDO("mysql:host=db", "root","root");
 $sql = file_get_contents("data/init.sql");
 $connection->exec($sql);
 
 echo "Database and table users created successfully.";
} catch(PDOException $error) {
 echo $sql . "<br>" . $error->getMessage();
}
?>
<?php
// index.php
$link = new PDO("mysql:host=localhost;dbname=blog_db", 'myuser', 'mypassword');

$result = $link->query('SELECT id, title FROM post');

$posts = array();
while($row = $result->fetch(PDO::FETCH_ASSOC))
{
  $posts[] = $row;
}

$link = null;

require 'templates/list.php';
?>

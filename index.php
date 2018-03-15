<?php
// index.php
$link = new PDO("mysql:host=localhost;dbname=blog_db", 'myuser', 'mypassword');

$result = $link->query('SELECT id, title FROM post');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LOP</title>
  </head>
  <body>
    <h1>List of Posts</h1>
    <ul>
      <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
        <li>
          <a href="/show.php?id=<?= $row['id'] ?>">
            <?= $row['title'] ?>
          </a>
        </li>
      <?php endwhile ?>
    </ul>
  </body>
</html>

<?php
$link = null;
?>

<!--
Problems need to be addressed in the long-run
- No error checking
- Poor Organization
- Difficult to reuse code
 -->

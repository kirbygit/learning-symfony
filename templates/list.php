<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LOP</title>
  </head>
  <body>
    <h1>List of Posts</h1>
    <ul>
      <?php foreach ($posts as $post): ?>
        <li>
          <a href="/show.php?id=<?= $post['id'] ?>">
            <?= $post['title'] ?>
          </a>
        </li>
      <?php endforeach ?>
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

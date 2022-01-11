<? ob_start();?>
<?php
$db = require "lib/db.php";
require "lib/functions.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/styles.css?cache=<?=time()?>">
  <link rel="stylesheet" href="css/layouts.css?cache=<?=time()?>">

  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>Discrete mathematics</title>
</head>
<body>
  <header class="header">

    <?php if(!empty($_SESSION['admin'])): ?>
    <div class="console">
      <div class="container">
        <ul class="console__btns">
          <li class="console__btn"><a href="/admin-panel.php">Admin Panel</a></li>
          <li class="console__btn"><a href="/home.php">Home</a></li>
          <li class="console__btn"><a href="/home.php?logout=true">Logout</a></li>
        </ul>
      </div>
    </div>
    <?php endif; ?>

    <div class="container">
      <form class="search" action="search.php" method="GET">
        <input class="search__input" type="text" name="request" value="<?=$_GET['request']?>">
        <button class="search__btn" type="submit">Search</button>
      </form>
    </div>


  </header>

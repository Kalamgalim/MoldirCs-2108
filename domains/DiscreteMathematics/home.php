<?php require_once "header.php"; ?>

<?php

if($_GET['logout'])
{
  session_destroy();
  redirect('/');
}

$query = "SELECT * FROM chapters";
$chapters = selectAll($link, $query);

// $result = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM users"));

// print_r($result);

?>

<main>
  <div class="container">

    <div class="box">

      <h1 class="title">Basics of Discrete mathematics</h1>

      <div class="chapters clearfix">

      <?php foreach($chapters as $chapter): ?>

        <div class="chapter">
          <h2 class="chapter__title"><a href="/chapter.php?chapter=<?=$chapter['id']?>"><?=$chapter['title']?></a></h2>
          <div class="chapters__img">
            <img src="/img/<?=$chapter['img']?>" alt="">
          </div>
        </div>

      <?php endforeach; ?>

      </div>

    </div>

  </div>
</main>

<?php require_once "footer.php"; ?>

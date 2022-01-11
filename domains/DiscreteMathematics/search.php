<?php require_once "header.php"; ?>

<?php

if(isset($_GET['request']))
{
  $query = "SELECT id, title, content, img FROM chapters WHERE content LIKE '%" . $_GET['request'] . "%' OR title LIKE '%" . $_GET['request'] . "%'";
  $results = selectAll($link, $query);

  // foreach($results as $r)
  // {
  //   str_replace($_GET['request'],'<span id="mark" class="highlight">'.$_GET['request'].'</span>',$r['content']);
  // }

  // print_r($query);
  // print_r($results);
}

?>

<main>
  <div class="container">
    <div class="box">
      <h1 class="title">Search results</h1>

      <?php foreach($results as $result): ?>
        <a class="result" href="chapter.php?chapter=<?=$result['id']?>&request=<?=$_GET['request']?>#mark">
        <div class="result__img">
          <img src="/img/<?=$result['img']?>" alt="">
        </div>
          <div class="result__text">
            <h2 class="result__title"><?=$result['title']?></h2>
            <div class="result__content">
              <?=$result['content']?>
            </div>
          </div>
        </a>
      <?php endforeach; ?>

    </div>
  </div>
</main>

<?php require_once "footer.php"; ?>

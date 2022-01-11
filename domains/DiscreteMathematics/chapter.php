<?php require_once "header.php"; ?>
<?php

$result = selectOne($link, "SELECT * FROM chapters WHERE id = " . $_GET['chapter']);

$chapters = selectAll($link, "SELECT id, title FROM chapters");

if(isset($_GET['request']))
{
  $order = $_GET['request'];
  $replace = '<span id="mark" class="highlight">'.$_GET['request'].'</span>';

  $result['content'] = str_replace($order,$replace,$result['content']);
  $result['title'] = str_replace($order,$replace,$result['title']);
}

?>

<main>
  <div class="container clearfix">

    <div class="navigation">
      <?php include "navigation.php" ?>
    </div>

    <div class="information">
      <div class="box">
        <h1 class="title"><?=$result['title']?></h1>

        <section>
        <?=$result['content']?>
        </section>
      </div>
    </div>

  </div>
</main>

<?php require_once "footer.php"; ?>

<div class="box">
  <div class="nav">

    <a href="/">
      <div class="nav__btn">
        Main page
      </div>
    </a>

    <?php foreach($chapters as $chapter): ?>

      <?php 

      $active = '';

      if($_GET['chapter'] == $chapter['id'])
      {
        $active = 'active';
      }

      ?>

    <a href="/chapter.php?chapter=<?=$chapter['id']?>">
      <div class="nav__btn <?=$active?>">
        <?=$chapter['title']?>
      </div>
    </a>

    <?php endforeach; ?>

  </div>
</div>
<?php

require_once "header.php";

if(isset($_GET['edit']))
{
  $query = "SELECT * FROM chapters WHERE id = " . $_GET['edit'];
  
  $chapter = selectOne($link,$query);
}

if(isset($_GET['delete']))
{
  $result = query($link, "DELETE FROM chapters WHERE id = " . $_GET['delete']);

  if($result)
  {
    redirect('admin-panel.php');
  }
}

if(isset($_POST['save']))
{
  $query = "UPDATE chapters SET title = '" . $_POST["title"] . "', content = '" . $_POST["content"] . "', img = '" . $_POST["img"] . "' WHERE id = " . $_POST["id"];
  $result = query($link, $query);

  if($result)
  {
    redirect('edit.php?edit='.$_POST['id']);
  }
}

?>

<main>
  <div class="container">
    <div class="box">
      <form class="edit__content" action="edit.php" method="POST">

        <button class="btn bg-success" type="submit" name="save">Save</button>

        <input type="hidden" name="id" value="<?=$_GET['edit']?>">

        <input class="input edit__input title" type="text" name="title" placeholder="Title of the chapter" value="<?=$chapter['title']?>">

        <input class="input edit__input" type="text" name="img" placeholder="Url for background image" value="<?=$chapter['img']?>">

        <textarea class="input edit__input resize-vertical" placeholder="The content of your chapter" name="content"><?=$chapter['content']?></textarea>
      </form>
    </div>
  </div>
</main>
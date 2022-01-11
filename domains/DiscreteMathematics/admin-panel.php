<?php
require_once "header.php";

if(isset($_POST['login']))
{
  $query = selectOne($link,"SELECT * FROM users WHERE name = '" . $_POST["name"] ."'");

  if($query){
    if($query['password'] == md5($_POST['password']))
    {
      $_SESSION['admin'] = $query;

      redirect('admin-panel.php');
    }else{
      $error = 'Неправильный пароль';
    }
  }else{
    $error = 'Такого пользователя нету';
  }
}

if(isset($_POST['add']))
{
  $query = "INSERT INTO `chapters` (title) VALUES ('". $_POST["title"] ."')";

  $result = query($link, $query);

  if($result)
  {
    redirect('admin-panel.php');
  }
}

$chapters = selectAll($link,"SELECT id, title FROM chapters");

// print_r($chapters);

if($_SESSION['admin'] == null)
{
  header("Location: login.php");
}else{

?>

<main>
  <div class="container">
    <div class="box">
      <h1 class="title">Admin Panel</h1>

      <form class="add__chapter" action="admin-panel.php" method="POST">
        <input class="input add__input" type="text" name="title" placeholder="Add new chapter">
        <button class="btn add__btn bg-success" type="submit" name="add">Add</button>
      </form>

      <?php if(!empty($chapters)): ?>
        <div class="chapter__col">
          <?php foreach($chapters as $chapter): ?>
            <div class="chapter__row">
              <div class="chapter__subtitle"><?php echo $chapter['title'] ?></div>
              <a href="/edit.php?edit=<?=$chapter['id']?>"><div class="chapter__btn">Edit</div></a>
              <a href="/edit.php?delete=<?=$chapter['id']?>"><div class="chapter__btn">Delete</div></a>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php } ?>

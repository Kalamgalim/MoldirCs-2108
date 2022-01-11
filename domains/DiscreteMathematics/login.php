<?php

require_once "header.php";

?>

<main>
  <div class="container">
    <div class="box">

      <form action="admin-panel.php" method="POST">
        <?php if(!empty($error)){
          echo $error;
        }?>
        <input class="input" type="text" name="name">
        <input class="input" type="password" name="password">
        
        <button type="submit" class="btn bg-blue" name="login">Login</button>
      </form>

    </div>
  </div>
</main>

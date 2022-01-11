<?php
function query($link,$query)
{
  $result = mysqli_query($link,$query);

      // var_dump($result);
      // exit;
  return $result;
}

function selectOne($link, $query)
{
  $result = mysqli_fetch_assoc(query($link, $query));

  return $result;
}

function selectAll($link, $query)
{
  $result = mysqli_fetch_all(query($link, $query),MYSQLI_ASSOC);

  return $result;
}

function redirect($url)
{
  header("Location: " . $url);
}

?>

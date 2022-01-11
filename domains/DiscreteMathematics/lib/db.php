<?php

global $link;

$link = mysqli_connect("localhost","root","","physics");

if($link)
{
  return $link;
}else{
  return '';
}

?>

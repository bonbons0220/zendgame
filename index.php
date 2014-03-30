<?php 
function __autoload($name)
{
  include_once $name.".php";
}

$page = new page();
$page->display();
?>


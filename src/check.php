<?php
session_start();

if(!isset($_SESSION['login'])) {
  echo 'Vous n\'êtes pas autoris´ à acceder à cette zone';
  include('./src/login.html');
  exit;
}
?> 
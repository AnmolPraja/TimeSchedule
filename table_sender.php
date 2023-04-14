<?php
session_start();

if(isset($_SESSION['user'])) {
  header("Location: table.php");
  exit();
} else {
  header("Location: display.php");
  exit();
}
?>

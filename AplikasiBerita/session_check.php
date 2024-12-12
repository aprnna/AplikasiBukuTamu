<?php
session_start();

if (!isset($_SESSION['username'])) {
  echo "<hr> <a href='login.php'>Silakan Login Kembali </a?";
  exit;
}

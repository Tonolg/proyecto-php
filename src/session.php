<?php
session_start();

/*
if (!isset($_SESSION['logincorrecto'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
*/

echo $_SESSION['logincorrecto'];



?>
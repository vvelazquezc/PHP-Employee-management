<?php

$session_init = $_SESSION['init'];
$session_life = $_SESSION['life'];


function isSessionAlive($init, $life)
{
  $actual_time = time();
  $session_finish = $init + $life;

  if ($actual_time >= $session_finish) {
    $head = "Refresh: 0; URL=./library/loginController.php?timeout";
    header($head);
  }
}

isSessionAlive($session_init, $session_life);

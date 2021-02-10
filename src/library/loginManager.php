<?php
function validateUser($u_email, $u_password)
{
  $json_users = file_get_contents("../../resources/users.json");
  $users = json_decode($json_users, true);
  $result = false;
  foreach ($users['users'] as $user) {
    if ($user['email'] == $u_email && password_verify($u_password, $user['password'])) {
      $result = true;
    }
  }
  return $result;
}

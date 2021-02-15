<?php
require("./library/avatarsApi.php");
$counter = 1;
foreach ($result as $avatar) {
    echo '<label class="label-avatar" for="avatar' . $counter . '">
              <input type="radio" id="avatar' . $counter . '" name="avatar" value="' . urldecode($avatar['photo']) . '">
              <img class="img_avatar" src="' . urldecode($avatar['photo']) . '" alt="avatar' . $counter . '">
            </label>';
    $counter++;
}

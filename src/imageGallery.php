<?php
require("./library/avatarsApi.php");
$counter = 1;
foreach ($result as $avatar) {
    echo '<label class="label-avatar" for="avatar' . $counter . '">
              <input type="radio" id="avatar' . $counter . '" class="input_avatar" name="avatar" value="' . urldecode($avatar['photo']) . '" checked="false" >
              <img class="img_avatar" src="' . urldecode($avatar['photo']) . '" alt="avatar' . $counter . '">
            </label>';
    $counter++;
}

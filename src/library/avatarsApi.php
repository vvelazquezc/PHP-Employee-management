<?php
function uifacesRequest($age = false, $gender = false, $limit = 8)
{
    $partial_url = $gender ? "&gender[]=$gender&from_age=" . ($age-5) . "&to_age=" . ($age+10) : "";
    $url = "https://uifaces.co/api?limit=$limit$partial_url";
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'X-API-KEY: 177AEE4B-C5854FEC-AEB8531D-318C0073'));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

    curl_close($ch);

   return json_decode($result, true);
}

if (isset($employee)) {
    $gender = $employee['gender'] == 'man' ? 'male' : ($employee['gender'] == "woman" ? "female" : "");

    if (isset($employee['avatar'])) {
        $result = uifacesRequest($employee['age'], $gender, 7);
        array_push($result, array("photo"=> $employee['avatar']));
    } else {
        $result = uifacesRequest($employee['age'], $gender);
    }
} else {
    $result = uifacesRequest();
}
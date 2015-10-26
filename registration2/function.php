<?php
function shuffle_assoc(&$array) {
    $keys = array_rand($array, count($array));
    foreach($keys as $key)
        $new[$key] = $array[$key];
        $array = $new;
        return true;
}
?>

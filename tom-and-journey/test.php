<?php
$data = '101,102,103,104,105,';
$temp = '';

for ($i = 0; $i < strlen($data); $i++) {
    // echo $i . '<br>';
    if ($i == strlen($data)) {
        break;
    }
    if ($data[$i] != ',') {
        // echo 'here';
        $temp .= $data[$i];
    } else {
        echo $temp . '<br>';
        $temp = '';
    }
}

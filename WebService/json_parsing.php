<?php
// membuka file JSON   
$file = file_get_contents('http://localhost/Matkul-Penerapan-Teknologi-Internet/WebService/json_konversi.php');
$json = json_decode($file, true);

var_dump($json);
foreach ($json as $key) {
    if (is_array($key)) {
        foreach ($key as $key => $value) {
            echo $key . ' : ' . $value . '<br />';
        }
    }
    echo "<br>";
}

?>
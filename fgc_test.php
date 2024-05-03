<?php

    // $url = 'http://my-json-server.typicode.com/pubspotmedia/api-test/main';
    $host = 'my-json-server.typicode.com';
    $path = '/pubspotmedia/api-test/main';
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $url = $protocol . '://' . $host . $path;
    $response = file_get_contents($url);
    if ($response !== false) {
        echo $response;
    } else {
        echo 'Error: Unable to fetch data.';
    }
?>

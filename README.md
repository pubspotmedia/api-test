# API JSON Test

Test API JSON 

## Penggunaan
Untuk menggunakan proyek ini, menggunakan curl atau file_get_contents php

```php
$url = 'http://my-json-server.typicode.com/pubspotmedia/api-test/main';

$response = file_get_contents($url);
if ($response !== false) {
    echo $response;
} else {
    echo 'Error: Unable to fetch data.';
}
\```

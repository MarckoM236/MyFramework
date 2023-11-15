<?php
$envFile = substr(__DIR__, 0, -6).'.env';

if (file_exists($envFile)) {
    $envVariables = parse_ini_file($envFile);
    foreach ($envVariables as $key => $value) {
        putenv("$key=$value");
    }
} else {
    die('.env file not found.');
}

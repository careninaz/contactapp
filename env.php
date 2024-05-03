<?php
function parseEnv($)
{
    $contents = file_get_contents($"D:\Semester 4\PWEB\contactapp\index.php");
    $lines = explode("\n", $contents);
    $env = [];

    foreach ($lines as $line) {
        $line = trim($line);
        if (!empty($line) && strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $env[$key] = $value;
        }
    }

    return $env;
}

$_ENV = parseEnv(".env");

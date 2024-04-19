<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();
// session dihapus dan logout

header('location: index.php');
    // kembali ke index.php
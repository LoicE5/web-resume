<?php
    # mysqli simple connection system
    $user = '/';
    $pass = '/';
    $db = '/';
    $server = '/';

    $user2 = 'root';
    $pass2 = 'root';
    $db2 = 'CV';
    $server2 = 'localhost';

    $conn = new mysqli($server,$user,$pass,$db) or die("Unable to connect");
?>

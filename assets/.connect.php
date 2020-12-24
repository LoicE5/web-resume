<?php
    # mysqli simple connection system
    $user = 'letien04';
    $pass = '5Wiyqaeh5j';
    $db = 'letien04_db';
    $server = 'sqletud.u-pem.fr';

    $user2 = 'root';
    $pass2 = 'root';
    $db2 = 'CV';
    $server2 = 'localhost';

    $conn = new mysqli($server,$user,$pass,$db) or die("Unable to connect");
?>
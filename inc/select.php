<?php
$sql = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
$res = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($res, MYSQLI_ASSOC);
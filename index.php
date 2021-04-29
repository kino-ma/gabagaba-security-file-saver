<?php
    $content = file_get_contents('php://input');

    if ($content) {
        mkdir("./out", 777, true);
        file_put_contents(__DIR__ . "./out/data.txt", $content);
    }
?>

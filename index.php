<!DOCTYPE html>
<html>
    <head>
        <title>File Saver</title>
    </head>
    <body>
        <?php
            $content = file_get_contents('php://input');
            $success = false;

            if ($content) {
                mkdir("./out", 777, true);
                $bytes_written = file_put_contents(__DIR__ . "/out/data.txt", $content);

                $success = $bytes_written > 0;
            }

            if ($success) {
                echo "write success\n";
                echo "<code>"
                echo $content;
                echo "</code>"
                echo "\n";
            } else {
                echo "failed";
            }
        ?>
    </body>
</html>

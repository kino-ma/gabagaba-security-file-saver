<!DOCTYPE html>
<html>
    <head>
        <title>File Saver</title>
    </head>
    <body>
        <h1>File Saver</h1>
        <?php
            $content = file_get_contents('php://input');
            $success = false;

            if ($content) {
                mkdir("./out", 0777, true);
                $bytes_written = file_put_contents(__DIR__ . "/out/data.txt", $content);

                $success = $bytes_written > 0;
            }

            if ($success) {
                echo "write success\n";
                echo "<code>\n";
                echo $content;
                echo "\n</code>\n";
            } else {
                echo "failed";
            }
        ?>
    </body>
</html>

# Gaba-gaba Security File Saver
If you put this script under your Apache environment, and you get very insecure Web server.

This script receives Post request and writes its request body to a file named `./out/data.txt`.

As repo's name says, this script is insecure.
Please use under *at your own risk*.

## Usage
1. Put `index.php` to your server that runs PHP (e.g. Apache).
2. POST any data that you want to save as a file to `http://your-server.example.com/path/to/your/dir/`.
3. Then, you can see `out/data.txt` in the directory in which you installed this script.

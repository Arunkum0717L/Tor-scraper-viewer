<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_POST['url'];
    $command = escapeshellcmd("python3 ../scraper/scrape.py " . escapeshellarg($url));
    shell_exec($command);
    header("Location: ../index.php?status=done");
    exit();
}
?>

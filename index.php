<?php
if (isset($_GET['status']) && $_GET['status'] === "done") {
    $output = json_decode(file_get_contents("../data/results.json"), true);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tor Scraper Viewer</title>
</head>
<body>
    <h1>Scrape Onion URL</h1>
    <form action="api/scrape.php" method="post">
        <input type="text" name="url" placeholder=".onion URL" required>
        <button type="submit">Scrape</button>
    </form>

    <?php if (!empty($output)): ?>
        <h2>Scraped Content</h2>
        <pre><?php echo htmlspecialchars($output['content']); ?></pre>
    <?php endif; ?>
</body>
</html>

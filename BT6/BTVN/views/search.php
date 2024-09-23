<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA Player Search</title>
</head>
<body>
    <h1>NBA Player Search</h1>
    <script> </script>
    <form action="index.php" method="GET">
        <label for="keyword">Search:</label>
        <input type="text" name="keyword" id="keyword">
        <button type="submit">Search</button>
    </form>

    <h2>Search Results:</h2>

    <?php foreach ($nbas as $nba): ?>
        <div>
            <img src="<?php echo $nba->getpic(); ?>" alt="<?php echo $nba->getname(); ?>">
            <p>Name: <?php echo $nba->getname(); ?></p>
            <p>Team: <?php echo $nba->getteam(); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>

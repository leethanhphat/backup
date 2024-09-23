<!-- search.php -->
<?php

// Assuming $nbas is your array of NBA players

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    // Filter NBA players based on the search keyword
    $nbas = array_filter($nbas, function ($nba) use ($keyword) {
        return stripos($nba->getname(), $keyword) !== false || stripos($nba->getteam(), $keyword) !== false;
    });

    // Display the filtered NBA players
    foreach ($nbas as $nba) {
        echo '<div>';
        echo '<img src="' . $nba->getpic() . '" alt="' . $nba->getname() . '">';
        echo '<p>Name: ' . $nba->getname() . '</p>';
        echo '<p>Team: ' . $nba->getteam() . '</p>';
        echo '</div>';
    }
}
?>

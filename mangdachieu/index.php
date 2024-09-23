<?php
// Define your product data
$mydb = array(
    "laptop" => ["Dell", "Sony", "Acer", "Asus"],
    "smartphone" => ["iPhone", "Galaxy S", "Sony Xperia"],
    "tablet" => ["Galaxy Tab", "iPad", "Xperia Tab"],
);

// Handle category selection
$activeCategory = isset($_GET['category']) ? $_GET['category'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập mảng PHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div> <h1>Bài tập mảng PHP<h1></div>
    <div class="row">
        <div class="col-3 table1">
            <div class="list-group" id="list-tab" role="tablist">

                <?php
                foreach ($mydb as $category => $products) {
                    $isActive = ($activeCategory === $category) ? 'active': '';
                    echo '<a class="list-group-item list-group-item-action tab text-muted text-capitalize cursor-pointer mb-3 ' . $isActive . '" href="?category=' . $category . '">' . $category . '</a>';
                }
                ?>
            </div>
        </div>

        <div class="col-9 badge-secondary table2">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-laptop" role="tabpanel" aria-labelledby="list-laptop-list">
                    <?php
                    if ($activeCategory !== null) {
                        $relatedProducts = $mydb[$activeCategory];
                        foreach ($relatedProducts as $product) {
                            echo '<div>' . $product . '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

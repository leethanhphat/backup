<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA Player Search</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h1>NBA Player Search</h1>
    <script> </script>
    <form action="index.php" method="GET">
        <label for="keyword">Search:</label>
        <input type="text" name="keyword" id="keyword">
        <button type="submit">Search</button>
    </form>    <h2>Search Results:</h2>

    <div id="search-results">
        <!-- Search results will be displayed here using AJAX -->
    </div>

    <script>
        $(document).ready(function () {
            // Listen for form submission
            $("form").submit(function (event) {
                // Prevent the default form submission
                event.preventDefault();

                // Get the search keyword
                var keyword = $("#keyword").val();

                // Make an AJAX request to the server
                $.ajax({
                    type: "GET",
                    url: "search_ajax.php", // Replace with the actual server-side script for searching
                    data: { keyword: keyword },
                    success: function (data) {
                        // Update the search results container with the received data
                        $("#search-results").html(data);
                    },
                    error: function () {
                        console.log("Error occurred during AJAX request");
                    }
                });
            });
        });
    </script>
</body>
</html>

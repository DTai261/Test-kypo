<!DOCTYPE html>
<html>
<head>
    <title>Movie Blog</title>
</head>
<body>
    <h1>Welcome to the Movie Blog!</h1>
    
    <!-- Search box -->
    <form action="index.php" method="get">
        <label for="search">Search:</label>
        <input type="text" name="search" id="search" placeholder="Enter movie title">
        <input type="submit" value="Search">
    </form>
    
    <?php
    // Connect to the database
    $conn = new mysqli('localhost', 'root', 'your_root_password', 'movie_blog');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch movies from the database based on search query
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
        $sql = "SELECT * FROM movies WHERE title LIKE '%" . $search . "%'";
    } else {
        $sql = "SELECT * FROM movies";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<h2>' . $row['title'] . '</h2>';
            echo '<p>' . $row['description'] . '</p>';
            echo '<p>Release Date: ' . $row['release_date'] . '</p>';
            echo '<img src="' . $row['poster_url'] . '" alt="Movie Poster" width="150">';
            
            // Link to movie details page
            echo '<a href="movie.php?movie_id=' . $row['movie_id'] . '">Details</a>';
            echo '<hr>';
        }
    } else {
        echo "No movies found.";
    }

    $conn->close();
    ?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Movie Details</title>
</head>
<body>
    <?php
    // Connect to the database
    $conn = new mysqli('localhost', 'root', 'your_root_password', 'movie_blog');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get movie ID from URL
    $movie_id = $_GET['movie_id'];

    // Fetch movie details
    $sql = "SELECT * FROM movies WHERE movie_id = $movie_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $movie = $result->fetch_assoc();
        echo '<h1>' . $movie['title'] . '</h1>';
        echo '<p>' . $movie['description'] . '</p>';
        echo '<p>Release Date: ' . $movie['release_date'] . '</p>';
        echo '<img src="' . $movie['poster_url'] . '" alt="Movie Poster" width="300">';
        
        // Form to add review
        echo '<h2>Add Review</h2>';
        echo '<form action="add_review.php" method="post">';
        echo '<input type="hidden" name="movie_id" value="' . $movie_id . '">';
        echo 'Rating: <input type="number" name="rating" min="1" max="5" required><br>';
        echo 'Review: <textarea name="review" rows="4" cols="50" required></textarea><br>';
        echo '<input type="submit" value="Submit Review">';
        echo '</form>';
        
        // Link to add to wishlist
        if ($movie['wishlist'] == 0) {
            echo '<a href="add_to_wishlist.php?movie_id=' . $movie_id . '">Add to Wishlist</a>';
        } else {
            echo '<p>Already in Wishlist</p>';
        }
    } else {
        echo "Movie not found.";
    }

    $conn->close();
    ?>
</body>
</html>

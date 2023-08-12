-- Insert sample movies
INSERT INTO movies (title, release_date, description, poster_url)
VALUES
    ('Movie 1', '2023-06-01', 'Description for Movie 1', 'poster1.jpg'),
    ('Movie 2', '2023-06-15', 'Description for Movie 2', 'poster2.jpg'),
    ('Movie 3', '2023-07-01', 'Description for Movie 3', 'poster3.jpg'),
    ('Movie 4', '2023-07-15', 'Description for Movie 4', 'poster4.jpg'),
    ('Movie 5', '2023-08-01', 'Description for Movie 5', 'poster5.jpg');

-- Insert sample users
INSERT INTO users (username, email, password)
VALUES
    ('user1', 'user1@example.com', 'hashedpassword1'),
    ('user2', 'user2@example.com', 'hashedpassword2'),
    ('user3', 'user3@example.com', 'hashedpassword3'),
    ('user4', 'user4@example.com', 'hashedpassword4'),
    ('user5', 'user5@example.com', 'hashedpassword5');

-- Insert sample reviews
INSERT INTO reviews (movie_id, user_id, rating, review_text)
VALUES
    (1, 1, 4, 'Enjoyed the movie!'),
    (1, 2, 3, 'Average movie.'),
    (2, 3, 5, 'Loved it! Must watch.'),
    (3, 4, 2, 'Not my cup of tea.'),
    (4, 5, 4, 'Great movie, looking forward to more like this.');

<?php

    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');

    if($conn) {
        $movie = $_GET['title'];
        $query = "SELECT * FROM movies LEFT JOIN directors ON directors.id = movies.director_id WHERE title = '$movie'";
        $results = mysqli_query($conn, $query);
        $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);


        foreach ($movies as $movieValue) {
            echo '<strong>Title: <strong>' . $movieValue['title'] . '<br>';
            echo '<img src=' . $movieValue['poster'] . ' width=200px>' . '<br>';
            echo '<strong>Views: <strong>' . number_format($movieValue['views']) . '<br>';
            echo '<strong>Director: <strong>' . $movieValue['name'] . '<br>';
            echo '<hr>';
        }
    } else {
        echo 'Error with mysql connection !';
    };

    mysqli_close($conn);

?>


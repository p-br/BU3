<?php

    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');
    $movies = array();

    if($conn) {
        $query = 'SELECT * FROM movies LEFT JOIN directors ON directors.id = movies.director_id';
        $results = mysqli_query($conn, $query);
        $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
        

        foreach ($movies as $movieValue) {
            echo '<strong>Title: <strong><a href="movie.php?title=' . $movieValue['title'] . '">' . $movieValue['title'] . '</a><br>';
            echo '<img src=' . $movieValue['poster'] . ' width=200px>' . '<br>';
            echo '<strong>Director: <strong>' . $movieValue['name'] . '<br>';
            echo '<strong>Views: <strong>' . number_format($movieValue['views']) .'<br>';
            echo '<hr>';
        }

    } else {
        echo 'Error with mysql connection !';
    };

    mysqli_close($conn);

?>


<?php

    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');

    if($conn) {
        $movie = $_GET['title'];
        $query = "SELECT * FROM movies WHERE title = '$movie'";
        $results = mysqli_query($conn, $query);
        $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);


        foreach ($movies as $value) {
            echo '<img src=' . $value['poster'] . '/>';
            echo '<strong>Title: <strong>' . $value['title'] . '<br>';
            echo '<strong>Views: <strong>' . $value['views'] . '<br>';
            echo '<hr>';
        }
    } else {
        echo 'Error with mysql connection !';
    };

    mysqli_close($conn);

?>


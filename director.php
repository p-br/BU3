<?php

    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');

    if($conn) {
        $director = $_GET['name'];
        $directorQuery = "SELECT * FROM directors WHERE directors.name = '$director'";
        $directorResults = mysqli_query($conn, $directorQuery);
        $directors = mysqli_fetch_all($directorResults, MYSQLI_ASSOC);

        $movieQuery = "SELECT * FROM movies INNER JOIN directors ON directors.id = movies.director_id WHERE directors.name = '$director'";
        $movieResults = mysqli_query($conn, $movieQuery);
        $movies = mysqli_fetch_all($movieResults, MYSQLI_ASSOC);

        
        foreach ($directors as $directorValue) {
            echo '<img src=' . $directorValue['image'] . ' width=200px>' . '<br>';
            echo '<strong>Name: </strong>' . $directorValue['name'] . '<br>';
            echo '<strong>Nationality: </strong>' . $directorValue['nationality'] . '<br>';
            echo '<strong>Date of Birth: </strong>' . $directorValue['birth_date'] .'<br><br>';
            echo '<strong>List of movies: </strong><ul style="margin-top:0">';

            foreach ($movies as $movieValue) {
                echo '<li>' . $movieValue['title'];
            };
            echo '</ul><hr>';
        }
    } else {
        echo 'Error with mysql connection !';
    };
    
    mysqli_close($conn);

?>
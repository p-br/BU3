<?php

    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');

    if($conn) {
        $query = 'SELECT * FROM directors';
        $results = mysqli_query($conn, $query);
        $directors = mysqli_fetch_all($results, MYSQLI_ASSOC);

        foreach ($directors as $directorValue) {
            echo '<strong>Name: <strong>' . $directorValue['name'] . '<br>';
            echo '<strong>Nationality: <strong>' . $directorValue['nationality'] . '<br>';
            echo '<strong>Date of Birth: <strong>' . $directorValue['birth_date'] .'<br>';
            echo '<hr>';
        }

    } else {
        echo 'Error with mysql connection !';
    };

    mysqli_close($conn);

?>


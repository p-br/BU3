<?php

$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

if($conn) {
    echo 'Connected to movie_db database !';



    $query = 'SELECT * FROM books';

    // 3. Executing the query (send query to DB)
    $results = mysqli_query($conn, $query);

        //  When insert/update/delete, it return true of false
        if($result)
            echo 'Succesfully inserted into DB';
        else
            echo 'Problem inserting into the DB';



    // 4. Fetch the results with associative array
    $books = mysqli_fetch_all($results, MYSQLI_ASSOC);

    // echo '<pre>';
    // var_dump($books);
    // echo '</pre>';
    
    foreach ($books as $book) {
        echo 'Title: ' . $book['title'] . '<br>';
        echo 'Date of release: ' . $book['date_of_release'] . '<br>';
        echo 'Price: ' . $book['price'] . ' €' .'<br>';
        echo 'Sales: ' . number_format($book['sales']) . '<br>';
        echo '<hr>';
    }

} else {
    echo 'Problem with connection !';
};

// Close the connection
mysqli_close($conn);



?>


<?php
    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');
    $movieResults = array();

    if($conn) {
        $title = $_POST['title'];
        $views = $_POST['views'];
        $poster = $_POST['poster'];
        $director_id = $_POST['director_id'];
                    

        $movieQuery = "INSERT INTO movies(title, views, poster, director_id) VALUES ('$title','$views','$poster','$director_id')";
        $movieResults = mysqli_query($conn, $movieQuery);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a director</title>
</head>
<body>

<?php include_once 'nav.html';?>

    <div>
            <form action="" method="POST"> 
               <p> <input type="text" name="title" placeholder="Movie title" value="<?php echo isset($POST['title']) ? $POST['title'] : '' ?>"></p>
                <p><input type="text" name="views" placeholder="Views" value="<?php echo isset($POST['views']) ? $POST['views'] : '' ?>"></p>
                <p><input type="text" name="director_id" placeholder="Director ID" value="<?php echo isset($POST['director_id']) ? $POST['director_id'] : '' ?>"></p>
                <p><input type="text" name="poster" placeholder="Poster URL"></p>
                <p><input type="submit" name="sbBtn" value="Submit"></p>
            </form>  
    </div>
    <?php
    echo 'data uploaded into DB';
    ?>

</body>
</html>

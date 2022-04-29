<?php
    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');

    if($conn) {
        $name = $_GET['name'];
        $nationality = $_GET['nationality'];
        $birth_date = $_GET['birth_date'];
        $image = $_GET['image'];
        
             

        $directorQuery = "INSERT INTO directors(id, name, nationality, birth_date, image) VALUES ('','$name','$nationality','$birth_date','$image')";
        $directorResults = mysqli_query($conn, $directorQuery);
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

    <div>
            <form action="" method="GET"> 
               <p> <input type="text" name="name" placeholder="Director Name" value="<?php echo isset($GET['name']) ? $GET['name'] : '' ?>"></p>
                <p><input type="text" name="nationality" placeholder="Nationality" value="<?php echo isset($GET['nationality']) ? $GET['nationality'] : '' ?>"></p>
                <p><input type="text" name="birth_date" placeholder="Date of Birth" value="<?php echo isset($GET['birth_date']) ? $GET['birth_date'] : '' ?>"></p>
                <p><input type="text" name="image" placeholder="Image URL"></p>
                <p><input type="submit" name="sbBtn" value="Submit"></p>
            </form>  
    </div>
    <?php
    echo 'data uploaded into DB';
    ?>

</body>
</html>
